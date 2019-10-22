<?php

function wppb_admin_pages() {

	add_submenu_page(
		'options-general.php',
		'WP Plugin Boilerplate',
		'WP Plugin Boilerplate',
		'administrator',
		'wppb_main',
		'wppb_main_page_callback'
	);

}

function wppb_main_page_callback() {

	$args = array(
		'settings' => wppb_settings(),
	);

	wppb_view('main.php', $args);

}

