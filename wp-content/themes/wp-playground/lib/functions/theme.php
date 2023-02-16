<?php 

//Custom WP Admin Login logo
function custom_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/site-login-logo.png) !important;
            padding-bottom: 30px !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_logo' );

//Add Theme Support
function custom_theme_setup() {
//    add_theme_support( 'automatic-feed-links' );
    //add_theme_support( 'custom-background' );
    //add_theme_support( 'custom-header' );
    //add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
//    add_theme_support( 'post-thumbnails', array('post') );
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

/* Editor Styles
function add_editor_styles() {
    add_editor_style( 'editor-styles.css' );
} */

// Content Width
if ( ! isset( $content_width ) ) {  
    $content_width = 1200;
}

?>

