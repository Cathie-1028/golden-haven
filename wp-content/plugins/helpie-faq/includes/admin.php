<?php

namespace HelpieFaq\Includes;

//
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Helpie-faq admin.
 *
 * Helpie-FAQ admin handler class is responsible for initializing Helpie-FAQ in
 * WordPress admin.
 *
 * @since 1.0.0
 */

class Admin
{
    public function __construct($plugin_domain, $version)
    {
        $this->plugin_domain = $plugin_domain;
        $this->version = $version;

        add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));

        $validation_map = array(
            'post_type' => 'String',
            'page' => 'String',
        );

        $sanitized_data = hfaq_get_sanitized_data("GET", $validation_map);

        if (isset($sanitized_data['post_type']) && $sanitized_data['post_type'] == "helpie_faq") {
            add_action('admin_enqueue_scripts', array($this, 'set_admin_pointers'), 10, 1);

            if (isset($sanitized_data['page']) && $sanitized_data['page'] == 'helpie-review-settings') {
                // Helpie-FAQ Pro feature popup Modal only rendering for helpie-faq admin setting page.
                add_action('admin_footer', array($this, 'load_modal'));
            }
        }

        $this->filters();
    }

    public function add_management_page()
    {
        $title = __('Helpie FAQ', $this->plugin_domain);

        $hook_suffix = add_management_page($title, $title, 'export', $this->plugin_domain, array(
            $this,
            'load_admin_view',
        ));

        add_action('load-' . $hook_suffix, array($this, 'load_assets'));
    }

    public function enqueue_scripts()
    {
        wp_enqueue_style($this->plugin_domain . '-bundle-styles', HELPIE_FAQ_URL . 'assets/admin.bundle.css', array(), $this->version, 'all');
        wp_enqueue_script($this->plugin_domain . '-bundle-admin-scripts', HELPIE_FAQ_URL . 'assets/admin.bundle.js', array('jquery'), $this->version, 'all');

        $nonce = wp_create_nonce('helpie_faq_nonce');

        $helpie_faq_object = array(
            'nonce' => $nonce,
            'ajax_url' => admin_url('admin-ajax.php'),
            'faq_plan' => hf_fs()->can_use_premium_code__premium_only() ? 'premium' : 'free',
        );

        wp_localize_script($this->plugin_domain . '-bundle-admin-scripts', 'helpie_faq_object', $helpie_faq_object);

        do_action('helpie_faq_admin_localize_script');

        global $current_screen;
        // check current page is faq-group page or not. if true then, get the current page.
        $helpie_faq_group_page = false;
        $helpie_faq_page_action = 'show_faq_groups';
        $helpie_faq_group_create_link = admin_url('edit-tags.php?taxonomy=helpie_faq_group&post_type=helpie_faq&helpie_faq_page_action=create');
        if (isset($current_screen) && (isset($current_screen->post_type) && $current_screen->post_type == HELPIE_FAQ_POST_TYPE)) {
            if (isset($current_screen->id) && $current_screen->id == 'edit-helpie_faq_group') {
                $helpie_faq_group_page = true;
                $helpie_faq_page_action = $this->get_faq_group_current_page();
            }
        }
        // FAQ group-summary page styles
        $faq_group_tax_styles['show_faq_groups'] = '#col-left { display: none; }#col-right { float:none; width: auto; }';

        // FAQ group-create page styles
        $faq_group_tax_styles['create_faq_group'] = '#col-right { display: none; }#col-left { float:none; width: auto; }';

        $helpie_faq_group_js_args = array(
            'is_page' => $helpie_faq_group_page,
            'page_action' => $helpie_faq_page_action,
            'create_link' => $helpie_faq_group_create_link,
        );

        $validation_map = array(
            'tag_ID' => 'Number',
        );
        $sanitized_data = hfaq_get_sanitized_data("GET", $validation_map);

        $group_term_id = isset($sanitized_data['tag_ID']) ? $sanitized_data['tag_ID'] : 0;

        /** Getting pending post status ids from the group  */
        $pending_post_ids = array();
        if (!empty($group_term_id) && intval($group_term_id)) {
            $faq_repo = new \HelpieFaq\Includes\Repos\Faq_Group();
            $pending_post_ids = $faq_repo->get_pending_post_ids($group_term_id);
        }

        $helpie_faq_group_js_args['pending_post_ids'] = $pending_post_ids;

        wp_localize_script($this->plugin_domain . '-bundle-admin-scripts', 'helpie_faq_group', $helpie_faq_group_js_args);

        if ($helpie_faq_group_page) {
            $styles = isset($faq_group_tax_styles[$helpie_faq_page_action]) ? $faq_group_tax_styles[$helpie_faq_page_action] : '';
            wp_add_inline_style('common', $styles);
        }
    }

    public function get_faq_group_current_page()
    {
        $page = 'show_faq_groups';

        $validation_map = array(
            'helpie_faq_page_action' => 'String',
        );
        $sanitized_data = hfaq_get_sanitized_data("GET", $validation_map);
        $page_action = isset($sanitized_data['helpie_faq_page_action']) ? $sanitized_data['helpie_faq_page_action'] : '';

        if ($page_action == 'create') {
            $page = "create_faq_group";
        }
        return $page;
    }

    public function remove_kb_category_submenu()
    {
        remove_submenu_page('edit.php?post_type=helpie_faq', 'edit-tags.php?taxonomy=helpdesk_category&amp;post_type=helpie_faq');
    }

    public function set_admin_pointers($page)
    {
        $pointer = new \HelpieFaq\Lib\Pointers\Pointers();
        $pointers = $pointer->return_pointers();

        //Arguments: pointers php file, version (dots will be replaced), prefix
        $manager = new \HelpieFaq\Lib\Pointers\Pointers_Manager($pointers, '1.0', 'hfaq_admin_pointers');
        $manager->parse();
        $pointers = $manager->filter($page);

        if (empty($pointers)) { // nothing to do if no pointers pass the filter
            return;
        }
        wp_enqueue_style('wp-pointer');
        $js_url = HELPIE_FAQ_URL . 'lib/pointers/pointers.js';

        wp_enqueue_script('hfaq_admin_pointers', $js_url, array('wp-pointer'), null, true);
        //data to pass to javascript
        $data = array(
            'next_label' => __('Next'),
            'close_label' => __('Close'),
            'pointers' => $pointers,
        );
        wp_localize_script('hfaq_admin_pointers', 'MyAdminPointers', $data);
    }

    public function load_modal()
    {
        $model = new \HelpieFaq\Includes\Components\Modal();
        $content = $model->get_content();
        hfaq_safe_echo($content);
    }

    public function filters()
    {
        $helpers = new \HelpieFaq\Includes\Utils\Helpers();
        $this->faq_default_category_id = $helpers->get_default_category_term_id();
        add_filter("helpie_faq_category_row_actions", array($this, 'modifying_the_faq_category_list'), 10, 2);
    }

    public function modifying_the_faq_category_list($actions, $term)
    {
        if (isset($term) && ($term->term_id == $this->faq_default_category_id)) {
            unset($actions['delete']);
        }
        return $actions;
    }
}
