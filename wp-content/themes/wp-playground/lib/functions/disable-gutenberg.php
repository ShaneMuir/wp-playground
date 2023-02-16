<?php 

// Remove the Gutenberg editor
add_filter( 'use_block_editor_for_post', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

/* Remove default editor for pages post type if using ACF layouts
function remove_editor() {
	remove_post_type_support( 'page', 'editor' );
}
add_action( 'admin_init', 'remove_editor' ); */


// Prevent Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
	wp_dequeue_style(' wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'global-styles' ); 
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );


remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
remove_action( 'wp_body_open', 'gutenberg_global_styles_render_svg_filters' );

?>

