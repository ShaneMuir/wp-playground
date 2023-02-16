<?php

$functions_dir = get_template_directory().'/lib/functions/';

require_once( $functions_dir.'enqueue-scripts-styles.php' );
require_once( $functions_dir.'disable-comments.php');
require_once( $functions_dir.'cleanup-header-footer-content.php' );
require_once( $functions_dir.'menus.php' );
//require_once( $functions_dir.'custom-image-sizes.php' );
require_once( $functions_dir.'custom-post-types.php' );
//require_once( $functions_dir.'custom-taxonomies.php' );
require_once( $functions_dir.'responsive-images.php' );
require_once( $functions_dir.'theme.php' );
require_once( $functions_dir.'user-roles.php' );
require_once( $functions_dir.'disable-gutenberg.php' );


// Misc. Snippets

/* Stop Contact Form 7 from auto-adding <p> tags
add_filter( 'wpcf7_autop_or_not', '__return_false' ); */
