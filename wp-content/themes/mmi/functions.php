<?php
	//Styles and Scripts
	function styles_scripts() {
		wp_enqueue_style('reset', get_template_directory_uri().'/css/libs/reset_css.css');
		wp_enqueue_style('index', get_template_directory_uri().'/css/index.css');
		// wp_enqueue_script('index', get_template_directory_uri().'/js/index.js');
	}

		add_action('wp_enqueue_scripts','styles_scripts');
?>