<?php 

/* Example - Project Type
function register_my_taxes_project_type() {

	$labels = [
		"name" => __( "Project Types", "gre" ),
		"singular_name" => __( "Project Type", "gre" ),
	];

	$args = [
		"label" => __( "Project Types", "gre" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'project_type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "project_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "project_type", [ "project" ], $args );
}
add_action( 'init', 'register_my_taxes_project_type' ); */


?>