<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

 
if ( !function_exists( 'wpestate_chld_thm_cfg_parent_css' ) ):
    function wpestate_chld_thm_cfg_parent_css() {
        $parent_style = 'wpestate_style'; 
        wp_enqueue_style('bootstrap.min',get_theme_file_uri('/css/bootstrap.min.css'), array(), '1.0', 'all');  
        wp_enqueue_style('bootstrap-theme.min',get_theme_file_uri('/css/bootstrap-theme.min.css'), array(), '1.0', 'all');  
        
        $use_mimify     =   wpresidence_get_option('wp_estate_use_mimify','');
        $mimify_prefix  =   '';
        if($use_mimify==='yes'){
            $mimify_prefix  =   '.min';    
        }
        
        if($mimify_prefix===''){
            wp_enqueue_style($parent_style,get_template_directory_uri().'/style.css', array('bootstrap.min','bootstrap-theme.min'), '1.0', 'all');  
        }else{
            wp_enqueue_style($parent_style,get_template_directory_uri().'/style.min.css', array('bootstrap.min','bootstrap-theme.min'), '1.0', 'all');  
        }
        
        if ( is_rtl() ) {
           wp_enqueue_style( 'chld_thm_cfg_parent-rtl',  trailingslashit( get_template_directory_uri() ). '/rtl.css' );
	}
        wp_enqueue_style( 'wpestate-child-style',
            get_stylesheet_directory_uri() . '/style.css',
                array( $parent_style ),
                wp_get_theme()->get('Version')
        );
        
    }
endif;

load_child_theme_textdomain('wpresidence', get_stylesheet_directory().'/languages');
add_action( 'wp_enqueue_scripts', 'wpestate_chld_thm_cfg_parent_css' );

add_action('wp_footer', 'manyChat');
function manyChat(){
    ?>
    <!-- ManyChat -->
    <script src="//widget.manychat.com/254212661751835.js" async="async"></script>

    <?php
}

add_action('wp_head', 'googleAnalytics');
function googleAnalytics() {
	?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117122035-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	 

	  gtag('config', 'UA-117122035-1');
	</script>
	<?php
}

add_action('wp_head', 'hotJar');
function hotJar(){
    ?>
    <!-- Hotjar Tracking Code for Site 5095665 (name missing) --> 
        <script>
         (function(h,o,t,j,a,r){         h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};         h._hjSettings={hjid:5095665,hjsv:6};         a=o.getElementsByTagName('head')[0];         r=o.createElement('script');r.async=1;         r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;         a.appendChild(r);     })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv='); 
        </script>
    <?php
}

add_action('wp_head', 'bingWebmasterCode');
function bingWebmasterCode() {
	?>
	<meta name="msvalidate.01" content="3B9A51CB4A6AD45A119987A745007154" />
	<?php
}

add_action('wp_head', 'yandexWebmasterCode');
function yandexWebmasterCode() {
	?>
	<meta name = "yandex-verification" content = "4a928221c62a772c" />
	<?php
}

add_action('wp_head',  'fbPages');
function fbPages(){
	?>
	<meta property="fb:pages" content="254212661751835" />
	<?php
}


add_action('wp_enqueue_scripts', 'loadCustomJS');
function loadCustomJS(){
    if(is_page_template('custompage.php')){
        // wp_enqueue_script('minjsscript', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
        wp_enqueue_script('my-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js');
         wp_enqueue_style('bs-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css');
    }
    else{
		
    }
}

add_action('wp_head', 'gtagCode');
function gtagCode(){
    ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PPNNSXJ');</script>
    <!-- End Google Tag Manager -->
    <?php
}
