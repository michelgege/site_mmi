jQuery(document).ready(function ()
{

      jQuery('.overlay').click(function ()
      {
            jQuery('.pop_up').addClass('visible');

      });
      jQuery('.close_button').click(function ()
      {
            jQuery('.pop_up').removeClass('visible');

      });

});