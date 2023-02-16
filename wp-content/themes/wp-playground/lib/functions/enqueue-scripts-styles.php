<?php
/* Load specific jQuery version - if not using version shipped with WordPress
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    //wp_deregister_script('jquery');
    //wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js");
    //wp_enqueue_script('jquery');
}*/


// Correctly Enqueue Other Scripts and CSS
function wpp_scripts() {

    // CSS
    wp_enqueue_style( 'projectcss', get_template_directory_uri() . '/build/index.css', array(), null );

    //Head Scripts go here

    // End of Document Scripts
    wp_enqueue_script( 'projectjs', get_template_directory_uri() . '/build/index.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'wpp_scripts' );


// Defer parsing of scripts except jQuery
function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) || strpos( $url, 'jquery.min.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );


// Remove the REST head links, we're not using
remove_action( 'wp_head', 'rest_output_link_wp_head'  );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11 );


// Remove Classic theme styles from the head
add_action( 'wp_enqueue_scripts', 'wpp_deregister_styles', 20 );
function wpp_deregister_styles() {
    wp_dequeue_style( 'classic-theme-styles' );
}

?>
