jQuery(document).ready(function ()
{
      var scene = document.getElementById('scene');
      var parallaxInstance = new Parallax(scene);

      var scene_two = document.getElementById('scene_two');
      var parallaxInstance = new Parallax(scene_two);

      var scene_third = document.getElementById('scene_third');
      var parallaxInstance = new Parallax(scene_third);

      var scene_fourth = document.getElementById('scene_fourth');
      var parallaxInstance = new Parallax(scene_fourth);

      jQuery('.overlay').click(function ()
      {
            jQuery('.pop_up').addClass('visible');

      });
      jQuery('.close_button').click(function ()
      {
            jQuery('.pop_up').removeClass('visible');

      });

});