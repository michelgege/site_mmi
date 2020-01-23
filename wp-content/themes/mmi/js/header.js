jQuery(document).ready(function ()
{

      jQuery('.burger').click(function ()
      {
            console.log("log : cliquez !");
            jQuery('.side_menu').addClass('open');

      });

      jQuery('.cross').click(function ()
      {
            jQuery('.side_menu').removeClass('open');

      });

});