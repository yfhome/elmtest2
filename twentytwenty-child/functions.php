<?php

add_action( 'wp_enqueue_scripts', 'tt_child_enqueue_parent_styles' );

function tt_child_enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action('after_setup_theme', 'remove_admin_bar_for_wp_user');
function remove_admin_bar_for_wp_user() {
	if (wp_get_current_user()->user_login == 'wp-test') {
		show_admin_bar(false);
	}
}
?>
