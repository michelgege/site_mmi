jQuery(document).ready(function() {
    jQuery('.burger').click(function() {
        jQuery('.side_menu').addClass('open');
      });

    jQuery('.cross').click(function(){
        jQuery('.side_menu').removeClass('open');
    });
});