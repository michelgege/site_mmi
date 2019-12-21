<?php
	//Styles and Scripts
	function styles_scripts() {
		wp_enqueue_style('reset', get_template_directory_uri().'/css/libs/reset_css.css');
		wp_enqueue_style('header', get_template_directory_uri().'/css/header.css');
		wp_enqueue_style('footer', get_template_directory_uri().'/css/footer.css');
		wp_enqueue_style('raleway', get_template_directory_uri().'https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700&display=swap');
		wp_enqueue_style('raleway', get_template_directory_uri()."https://fonts.googleapis.com/css?family=Oswald:700&display=swap");

		wp_register_style('index', get_template_directory_uri().'/css/index.css');
		wp_register_style('coin_pro', get_template_directory_uri().'/css/coin_pro.css');
		wp_register_style('en_detail', get_template_directory_uri().'/css/en_detail.css');
		wp_register_style('et_apres', get_template_directory_uri().'/css/et_apres.css');
		wp_register_style('international', get_template_directory_uri().'/css/international.css');
		wp_register_style('lptsi', get_template_directory_uri().'/css/lptsi.css');
		wp_register_style('realisations', get_template_directory_uri().'/css/realisations.css');
		
        // SCRIPT
        wp_enqueue_script('coin_pro', get_template_directory_uri().'/js/libs/jquery.js');
        wp_enqueue_script('coin_pro', get_template_directory_uri().'/js/libs/parallax.min.js');
		wp_enqueue_script('coin_pro', get_template_directory_uri().'/js/coin_pro.js');
		
		

		if (is_page('Accueil')) {
			wp_enqueue_style('index');
		}

		else if (is_page('lptsi')) {
			wp_enqueue_style('lptsi');
		}

		else if (is_page('coin-pro')) {
			wp_enqueue_style('coin_pro');
		}

		else if (is_page('et-apres')) {
			wp_enqueue_style('et_apres');
		}

		else if (is_page('international')) {
			wp_enqueue_style('international');
		}

		else if (is_page('mmi-en-detail')) {
			wp_enqueue_style('en_detail');
		}

		else if (is_page('realisations')) {
			wp_enqueue_style('realisations');
		}
	}

		add_action('wp_enqueue_scripts','styles_scripts');

	//Menu
	function menu() {
		register_nav_menus(array('menu-principal' => 'Principal'));
	}

	add_action('after_setup_theme','menu');
?>