<?php 
	get_header(); 
?>

<section>
	<!-- the loop -->
	<?php while (have_posts()) : the_post(); ?>
		<div><?php the_content(); ?></div>
	<?php endwhile; ?>
	<article>
		<?php the_field('les_lp'); ?>
	</article>
</section>

<?php 
	get_footer();
?>