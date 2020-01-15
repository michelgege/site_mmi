  <?php
/**
 * Template Name: Et Après ?
 */
?>

<?php
	get_header();
?>

<section id="testimony">

	<div id="scene" class="scene">

		<div data-depth="-1.80">
			<img class="empty_top_triangle" src="<?php echo get_template_directory_uri() ?>/img/et_apres/empty_top_triangle" alt=""> 
		</div>

		<div data-depth="2.50">
			<img class="green_top_triangle" src="<?php echo get_template_directory_uri() ?>/img/et_apres/green_top_triangle" alt="">
		</div>

		<div data-depth="-2.25">
			<img class="grey_square" src="<?php echo get_template_directory_uri() ?>/img/et_apres/grey_square" alt="">
		</div>

		<div data-depth="1.25">
			<img class="side_green_triangle" src="<?php echo get_template_directory_uri() ?>/img/et_apres/side_green_triangle" alt="">
		</div>

	</div>

	<h2>Les témoignages</h2>

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