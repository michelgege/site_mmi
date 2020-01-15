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
		<span class="filter" style="background-color: <?php the_field('header_filter_color'); ?>;"></span>
		<div id="menu">
			<a href="../"><img src="<?php echo get_template_directory_uri() ?>/img/mmi_normal.svg" alt="Logo MMI Chambéry"></a>
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
		
		<!-- Parallax -->
		<div class="scene">
			<div data-depth="0.2"><img id="header_empty_triangle_medium" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape1.svg" alt=""></div>
			<div data-depth="0.8"><img id="header_full_triangle_small" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape2.svg" alt=""></div>
			<div data-depth="0.1"><img id="header_empty_square_medium" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape3.svg" alt=""></div>
			<div data-depth="0.1"><img id="header_empty_square_small" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape4.svg" alt=""></div>
			<div data-depth="0.5"><img id="header_full_triangle_big" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape5.svg" alt=""></div>
			<div data-depth="0.4"><img id="header_full_triangle_medium" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape6.svg" alt=""></div>
			<div data-depth="0.3"><img id="header_empty_triangle_small" src="<?php echo get_template_directory_uri() ?>/img/header_shapes/header_shape7.svg" alt=""></div>
		</div>

	</header>

	<style>
		header {
			background-image: url("<?php the_field('header_background_image') ?>");
		}
	</style>