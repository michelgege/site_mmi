  <?php
/**
 * Template Name: Et Après ?
 */
?>

<?php
	get_header();
?>
<div class="wrap">
	<section id="testimony">
		<div class="scene">
			<img data-depth="-1.80" src="<?php echo get_template_directory_uri() ?>/img/et_apres/empty_top_triangle.svg" alt=""> 
			<img data-depth="2.50" src="<?php echo get_template_directory_uri() ?>/img/et_apres/green_top_triangle.svg" alt="">
			<img data-depth="-2.25" src="<?php echo get_template_directory_uri() ?>/img/et_apres/grey_square.svg" alt="">
			<img data-depth="1.25" src="<?php echo get_template_directory_uri() ?>/img/et_apres/side_green_triangle.svg" alt="">
		</div>

		<h2>Témoignages</h2>

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
				<div>
					<div class="img_container">
						<img src="<?php echo $image; ?>" alt="photo de profil">
					</div>
					<div>
						<h3><?php echo $name; ?></h3>
						<h4><?php echo $job; ?></h4>
						<p><?php echo $company; ?>, <?php echo $city; ?></p>
					</div>
				</div>
				<p><?php echo $content; ?></p>
			</div>

		<?php endwhile; ?>

	</section>
</div>


<?php
	get_footer();
?>