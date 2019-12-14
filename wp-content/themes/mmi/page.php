<?php 
	get_header(); 
?>

<section>
	<!-- the loop -->
	<?php while (have_posts()) : the_post(); ?>
		<div><?php the_content(); ?></div>
	<?php endwhile; ?>
</section>

<?php 
	get_footer();
?>