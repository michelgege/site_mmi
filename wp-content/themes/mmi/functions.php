<?php
	//Styles and Scripts
	function styles_scripts() {
		// Styles loaded
		wp_enqueue_style('reset', get_template_directory_uri().'/css/libs/reset_css.css');
		wp_enqueue_style('header', get_template_directory_uri().'/css/header.css');
		wp_enqueue_style('footer', get_template_directory_uri().'/css/footer.css');
		wp_enqueue_style('raleway', 'https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800&display=swap');

		//Styles enqueued
		wp_register_style('index', get_template_directory_uri().'/css/index.css');
		wp_register_style('header_index', get_template_directory_uri().'/css/header_index.css');
		wp_register_style('coin_pro', get_template_directory_uri().'/css/coin_pro.css');
		wp_register_style('en_detail', get_template_directory_uri().'/css/en_detail.css');
		wp_register_style('responsive_en_details', get_template_directory_uri().'/css/responsive_en_details.css');
		wp_register_style('et_apres', get_template_directory_uri().'/css/et_apres.css');
		wp_register_style('et_apres_responsive', get_template_directory_uri().'/css/et_apres_responsive.css');
		wp_register_style('international', get_template_directory_uri().'/css/international.css');
		wp_register_style('international_responsive', get_template_directory_uri().'/css/international_responsive.css');
		wp_register_style('lptsi', get_template_directory_uri().'/css/lptsi.css');
		wp_register_style('realisations', get_template_directory_uri().'/css/realisations.css');
		wp_register_style('responsive_realisations', get_template_directory_uri().'/css/responsive_realisations.css');

		
        // SCRIPT
        	//Parallax
	  	wp_enqueue_script('parallax_libs', 'https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js', array(), false, true);
	  	wp_enqueue_script('parallax_header', get_template_directory_uri().'/js/parallax_header.js', array('jquery','parallax_libs'), false, true);

	  		//Scripts enqueued
		wp_register_script('en_detail_js', get_template_directory_uri().'/js/en_detail.js', array('jquery','parallax_libs'), false, true);
		wp_register_script('coin_pro_js', get_template_directory_uri().'/js/coin_pro.js', array('jquery','parallax_libs'), false, true);
		wp_register_script('realisations_js', get_template_directory_uri().'/js/realisations.js', array('jquery','parallax_libs'), false, true);
		wp_register_script('index_js', get_template_directory_uri().'/js/index.js', array('jquery','parallax_libs'), false, true);
		wp_register_script('international_js', get_template_directory_uri().'/js/international.js', array('jquery','parallax_libs'), false, true);
		
		//Load Styles enqueued
		if (is_page('Accueil')) {
			wp_enqueue_style('index');
			wp_enqueue_style('header_index');
			wp_enqueue_script('index_js');
		}

		else if (is_page('lptsi')) {
			wp_enqueue_style('lptsi');
		}

		else if (is_page('coin-pro')) {
			wp_enqueue_style('coin_pro');
			wp_enqueue_script('coin_pro_js');
		}

		else if (is_page('et-apres')) {
			wp_enqueue_style('et_apres');
			wp_enqueue_style('et_apres_responsive');
		}

		else if (is_page('international')) {
			wp_enqueue_style('international');
			wp_enqueue_style('international_responsive');
			wp_enqueue_script('international_js');
		}

		else if (is_page('mmi-en-detail')) {
			wp_enqueue_script('en_detail_js');
			wp_enqueue_style('responsive_en_details');
			wp_enqueue_style('en_detail');
		}

		else if (is_page('realisations')) {
			wp_enqueue_style('realisations');
			wp_enqueue_style('responsive_realisations');
			wp_enqueue_script('realisations_js');
		}
	}

		add_action('wp_enqueue_scripts','styles_scripts');

	//Menu
	function menu() {
		register_nav_menus(array('menu-principal' => 'Principal'));
	}

	add_action('after_setup_theme','menu');
?>