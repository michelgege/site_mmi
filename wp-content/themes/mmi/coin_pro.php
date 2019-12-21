<?php
/**
 * Template Name: Coin Pro
 */
?>

<?php
	get_header();
?>



<div id="wrap_body">


<h2 class="pro_title"> Besoin de nous ? </h2>


<div id="company">
<h4 class="text"> Vous êtes une entrepise ? </h4>
<h4 class="text"> Nos étudiants peuvent vous aider via les stages ou les projets </h4>
</div>





    <div id="scene" class="scene">
    	<div  class="layer" data-depth="0.10">
            <img src="<?php echo get_template_directory_uri() ?>/img/pro_grey_square_1.svg" id="grey_square">
        </div> 
       <div  class="layer" data-depth="0.40">
            <img src="<?php echo get_template_directory_uri() ?>/img/pro_white_triangle_1.svg" id="white_triangle">
        </div> 
        <div  class="layer" data-depth="0.90">
            <img src="<?php echo get_template_directory_uri() ?>/img/pro_border_red_triangle_1.svg" id="border_red_triangle">
        </div> 
    </div>  


</div>






<?php
	get_footer();
?>

<script src="<?php echo get_template_directory_uri() ?>/js/libs/parallax.min.js"></script>
<script>

    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene, {
        selector: '.layer'
    });
</script>