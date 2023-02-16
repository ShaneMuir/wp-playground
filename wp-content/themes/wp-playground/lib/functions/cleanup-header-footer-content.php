<?php 
// Remove Unnecessary Meta Tags
remove_action( 'wp_head', 'wp_generator' ) ; 
remove_action( 'wp_head', 'wlwmanifest_link' ) ; 
remove_action( 'wp_head', 'rsd_link' ) ;
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

// Remove Secondary Feeds
remove_action( 'wp_head', 'feed_links', 2 ); 
remove_action( 'wp_head', 'feed_links_extra', 3 );

//Disable native emjoi support
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

//Remove version numbers from CSS/JS in head
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

// Remove Header Scripts
function header_deregister_scripts(){
}
add_action( 'wp_head', 'header_deregister_scripts' );

// Remove Footer Scripts
function footer_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'footer_deregister_scripts' );

// Remove CSS
function header_dequeue_css() {
    //wp_dequeue_style('name')

    /* Removes Gutenburg front-end CSS
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style');
    */
}
add_action( 'wp_enqueue_scripts', 'header_dequeue_css', 100);

// Only load jQuery Migrate where it's required 
function remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];
        if ( $script->deps ) { 
            // Check whether the script has any dependencies
            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    }
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

/* Cleanup WooCommerce CSS/Scripts
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' ); */

/* Only load WooCommerce scripts on the required pages
function dequeue_woocommerce_scripts() {
    if ( function_exists( 'is_woocommerce' ) && !is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page() ) {
        wp_dequeue_script('wc-add-to-cart');
        wp_dequeue_script('jquery-blockui');
        wp_dequeue_script('jquery-placeholder');
        wp_dequeue_script('woocommerce');
        wp_dequeue_script('jquery-cookie');
        wp_dequeue_script('wc-cart-fragments');  
    }
}
add_action( 'wp_print_scripts', 'dequeue_woocommerce_scripts', 100 ); */


/* Contact Form 7 Plugin - disable plugin CSS and JS. JS is then loaded on the relevant template
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

// On the applicable template use -
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
    wpcf7_enqueue_scripts();
}
to enqueue

// Only load CF7 scripts on the required pages
function dequeue_cf7_scripts() {
    if (!is_page_template('page-templates/contact-us.php') && !is_page_template('page-templates/homepage.php')) {
        wp_dequeue_script('wpcf7-recaptcha');
        wp_dequeue_script('google-recaptcha');     
    }
}
add_action( 'wp_print_scripts', 'dequeue_cf7_scripts', 100 ); */

?>