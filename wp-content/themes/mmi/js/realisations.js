jQuery(document).ready(function ()
{

	var last_opened;

      jQuery('.overlay').click(function ()
      {
      		var attr_work = jQuery(this).attr("data-name");

      		var pop_array = jQuery(".pop_up").toArray();

      		console.log(last_opened);

      		for (var i = 0; i < pop_array.length ; i++) 
      		{
      			if (pop_array[i].getAttribute('data-name') == attr_work)
      			{
      				pop_array[i].classList.add('visible');
      				last_opened = pop_array[i];
      			}
      		}
      });
      jQuery('svg').click(function ()
      {
            last_opened.classList.remove('visible');

      });

});