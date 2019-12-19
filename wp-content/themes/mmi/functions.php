<?php
	//Styles and Scripts
	function styles_scripts() {
		wp_enqueue_style('reset', get_template_directory_uri().'/css/libs/reset_css.css');
		wp_enqueue_style('header', get_template_directory_uri().'/css/header.css');
		wp_enqueue_style('footer', get_template_directory_uri().'/css/footer.css');
		wp_enqueue_style('raleway', get_template_directory_uri().'https://fonts.googleapis.com/css?family=Raleway:300,400,500,700&display=swap');

		wp_register_style('index', get_template_directory_uri().'/css/index.css');
		wp_register_style('coin_pro', get_template_directory_uri().'/css/coin_pro.css');
		wp_register_style('en_detail', get_template_directory_uri().'/css/en_detail.css');
		wp_register_style('et_apres', get_template_directory_uri().'/css/et_apres.css');
		wp_register_style('international', get_template_directory_uri().'/css/international.css');
		wp_register_style('lptsi', get_template_directory_uri().'/css/lptsi.css');
		wp_register_style('realisations', get_template_directory_uri().'/css/realisations.css');
		// wp_enqueue_script('index', get_template_directory_uri().'/js/index.js');

		if (is_page('Accueil')) {
			wp_enqueue_style('index');
		}

		else if (is_page('lptsi')) {
			wp_enqueue_style('lptsi');
		}
	}

		add_action('wp_enqueue_scripts','styles_scripts');

	//Menu
	function menu() {
		register_nav_menus(array('menu-principal' => 'Principal'));
	}

	add_action('after_setup_theme','menu');
?>