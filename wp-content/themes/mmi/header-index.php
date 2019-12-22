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
				$replace[$key] = '<span id="bold_title">'.$value.'</span>';
				$pattern[$key] = "/".$value."/";
			}
			echo preg_replace($pattern, $replace, $subject);
		?></h1>
		<div id="scroll">
			<img src="<?php echo get_template_directory_uri() ?>/img/" alt="Scroll">
		</div>
		<div id="header2">
			<div id="social">
				<img src="<?php the_field('twitter'); ?>" alt="Logo Twitter">
				<img src="<?php the_field('facebook'); ?>" alt="Logo Facebook">
				<img src="<?php the_field('instagram'); ?>" alt="Logo Instagram">
			</div>
		</div>
	</header>