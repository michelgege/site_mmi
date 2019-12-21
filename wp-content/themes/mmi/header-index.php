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
		<div id="menu">
			<a href="<?php get_site_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/mmi_normal.svg" alt="Logo MMI Chambéry"></a>
			<nav>
				<?php wp_nav_menu();?>
			</nav>
		</div>
		<h1><?php the_field('titre'); ?></h1>
		<div id="header2">
			<div id="social">
				<img src="<?php the_field('twitter'); ?>" alt="Logo Twitter">
				<img src="<?php the_field('facebook'); ?>" alt="Logo Facebook">
				<img src="<?php the_field('instagram'); ?>" alt="Logo Instagram">
			</div>
		</div>
	</header>