<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

$nitropack_functions_file = '/Applications/MAMP/htdocs/golden-haven/wp-content/plugins/nitropack/functions.php';
$nitropack_abspath = '/Applications/MAMP/htdocs/golden-haven/';

// We need the ABSPATH check in order to verify that the functions file which we are about to load belongs to the expected WP installation.
// Otherwise issues may occur when a site is being duplicated in a subdir on the same server.
if (file_exists($nitropack_functions_file) && ABSPATH == $nitropack_abspath) {
    define( 'NITROPACK_ADVANCED_CACHE', true);
    define( 'NITROPACK_ADVANCED_CACHE_VERSION', '1.5.8');
    define( 'NITROPACK_LOGGED_IN_COOKIE', 'wordpress_logged_in_86a9106ae65537651a8e456835b316ab' );
    require_once $nitropack_functions_file;
}

if (defined("NITROPACK_VERSION") && defined("NITROPACK_ADVANCED_CACHE_VERSION") && NITROPACK_VERSION == NITROPACK_ADVANCED_CACHE_VERSION && nitropack_is_dropin_cache_allowed()) {
    nitropack_handle_request("drop-in");
    $nitro = get_nitropack_sdk();

    if (null !== $nitro) {
        $np_siteConfig = nitropack_get_site_config();
        if ( !empty($np_siteConfig["alwaysBuffer"]) || ($nitro->isAJAXRequest() && $nitro->isAllowedAJAX()) ) {
            ob_start(function($buffer) use (&$nitro) {
                if ($nitro->isAJAXRequest() && $nitro->isAllowedAJAX()) {
                    $nitro->pageCache->setContent($buffer, []);
                }
                return $buffer;
            });
        }
    }
}
