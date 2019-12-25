$(document).ready(function ()
{
      $('.overlay').click(function ()
      {
            $('.pop_up').addClass('visible');

      });
      $('.close_button').click(function ()
      {
            $('.pop_up').removeClass('visible');

      });
});