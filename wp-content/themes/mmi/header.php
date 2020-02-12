<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title><?php the_title(); ?></title>
	<?php wp_head();?>
</head>
<body>
	<header>
		<!-- Side menu -->
		<div class="side_menu">
			<div class="top">
				<img class ="cross" src="<?php echo get_template_directory_uri() ?>/img/cross.svg">
			</div>
			<nav>
				<?php wp_nav_menu();?>
			</nav>

			<span class="line"></span>

			<div id="side_social">
				<a href="https://twitter.com/mmi_chambery" target="_blank"><img src="<?php the_field('header_twitter'); ?>" alt="Logo Twitter"></a>
				<a href="https://www.facebook.com/mmichambery/" target="_blank"><img src="<?php the_field('header_facebook'); ?>" alt="Logo Facebook"></a>
				<a href="https://www.instagram.com/mmichambery/" target="_blank"><img src="<?php the_field('header_instagram'); ?>" alt="Logo Instagram"></a>
			</div>

			<ul id="side_links">
				<li><a href="https://mmi-interne.univ-savoie.fr/Portail/" target="_blank">MMI Interne</a></li>
				<li><a href="https://mmi-pret.univ-savoie.fr/index.php" target="_blank">MMI Prêt</a></li>
				<li><a href="https://ade6-usmb-ro.grenet.fr/direct/index.jsp?data=bd72d825015315fecf99b2ab1eb24a5f0412158042ec7880df46b7c8db8028847a856464e9e1a5bac86f839c03d7c55aedc5434d4a4b357ad7a78c3eabf336a2d756ba483954b0e3edf59b9627563685" target="_blank">Emploi du temps</a></li>
			</ul>
		</div>

		<!-- Header -->
		<span class="filter" style="background-color: <?php the_field('header_filter_color'); ?>;"></span>
		<div id="menu">
			<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/mmi_normal.svg" alt="Logo MMI Chambéry"></a>
			<img class ="burger" src="<?php echo get_template_directory_uri() ?>/img/burger.svg">
			<nav>
				<?php wp_nav_menu();?>
			</nav>
		</div>
		<h1><?php
			$subject = get_field('header_title');
			
			$pattern = explode(" ", get_field('header_title_bold'));
			$replace = array();
			foreach ($pattern as $key => $value) {
				$replace[$key] = '<span class="bold">'.$value.'</span>';
				$pattern[$key] = "/".$value."/";
			}
			echo preg_replace($pattern, $replace, $subject);
		?></h1>
		<div id="scroll">
			<img src="<?php echo get_template_directory_uri() ?>/img/scroll.svg" alt="Scroll">
		</div>
		<div id="second_header">
			<div id="social">
				<a href="https://twitter.com/mmi_chambery" target="_blank"><img src="<?php the_field('header_twitter'); ?>" alt="Logo Twitter"></a>
				<a href="https://www.facebook.com/mmichambery/" target="_blank"><img src="<?php the_field('header_facebook'); ?>" alt="Logo Facebook"></a>
				<a href="https://www.instagram.com/mmichambery/" target="_blank"><img src="<?php the_field('header_instagram'); ?>" alt="Logo Instagram"></a>
			</div>
			<div id="second_menu">
				<img src="<?php echo get_template_directory_uri() ?>/img/header_shape.svg" alt="">
				<ul>
					<li><a href="https://mmi-interne.univ-savoie.fr/Portail/" target="_blank">MMI Interne</a></li>
					<li><a href="https://mmi-pret.univ-savoie.fr/index.php" target="_blank">MMI Prêt</a></li>
					<li><a href="https://ade6-usmb-ro.grenet.fr/direct/index.jsp?data=bd72d825015315fecf99b2ab1eb24a5f0412158042ec7880df46b7c8db8028847a856464e9e1a5bac86f839c03d7c55aedc5434d4a4b357ad7a78c3eabf336a2d756ba483954b0e3edf59b9627563685" target="_blank">Emploi du temps</a></li>
				</ul>
			</div>
		</div>
		
		<!-- Parallax -->
		<div class="scene">
			<div data-depth="0.2"><img id="header_empty_triangle_medium" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape1.svg" alt=""></div>
			<div data-depth="0.8"><img id="header_full_triangle_small" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape2.svg" alt=""></div>
			<div data-depth="-0.1"><img id="header_empty_square_medium" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape3.svg" alt=""></div>
			<div data-depth="0.1"><img id="header_empty_square_small" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape4.svg" alt=""></div>
			<div data-depth="0.5"><img id="header_full_triangle_big" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape5.svg" alt=""></div>
			<div data-depth="-0.4"><img id="header_full_triangle_medium" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape6.svg" alt=""></div>
			<div data-depth="0.3"><img id="header_empty_triangle_small" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape7.svg" alt=""></div>
			
		</div>

	</header>

	<style>
		header {
			background-image: url("<?php the_field('header_background_image') ?>");
		}
	</style>