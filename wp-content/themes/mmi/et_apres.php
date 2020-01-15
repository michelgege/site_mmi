  <?php
/**
 * Template Name: Et Après ?
 */
?>

<?php
	get_header();
?>

<section id="testimony">

	<h2>Les Témoignages</h2>

	<?php while( have_rows('after_testimony') ): the_row(); 

		// vars
		$image = get_sub_field('after_testimony_img');
		$name = get_sub_field('after_testimony_name');
		$job = get_sub_field('after_testimony_job');
		$company = get_sub_field('after_testimony_company');
		$city = get_sub_field('after_testimony_city');
		$content = get_sub_field('after_testimony_content');

	?>	

	<div class="witness">

		<img src="<?php echo $image; ?>" alt="photo de profil">

		<div>

			<h3><?php echo $name; ?></h3>
			<h4><?php echo $job; ?></h4>
			<p><?php echo $company; ?>, à <?php echo $city; ?></p>

		</div>

		<p><?php echo $content; ?></p>

	</div>

	<?php endwhile; ?>

</section>

<?php
	get_footer();
?>