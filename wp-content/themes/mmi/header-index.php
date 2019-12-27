<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<title>Site MMI</title>
	<?php wp_head();?>
</head>
<body>
	<header>
		<img src="<?php the_field('image'); ?>" alt="Fond header">
		<span class="filter" style="background-color: <?php the_field('couleur_filtre'); ?>;"></span>
		<div id="menu">
			<a href="index.php"><img src="<?php echo get_template_directory_uri() ?>/img/mmi_normal.svg" alt="Logo MMI Chambéry"></a>
			<nav>
				<?php wp_nav_menu();?>
			</nav>
		</div>
		<h1><?php
			$subject = get_field('titre');

			$pattern = explode(" ", get_field('titre_gras'));
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
		<div id="header2">
			<div id="social">
				<a href="#"><img src="<?php the_field('twitter'); ?>" alt="Logo Twitter"></a>
				<a href="#"><img src="<?php the_field('facebook'); ?>" alt="Logo Facebook"></a>
				<a href="#"><img src="<?php the_field('instagram'); ?>" alt="Logo Instagram"></a>
			</div>
			<div id="menu2">
				<img src="<?php echo get_template_directory_uri() ?>/img/header_shape.svg" alt="">
				<ul>
					<li><a href="#">MMI Interne</a></li>
					<li><a href="#">MMI Prêt</a></li>
					<li><a href="#">Emploi du temps</a></li>
				</ul>
			</div>
		</div>
	</header>