<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function()
{

	jQuery(".options").corner("top");

	jQuery("#view-theme").fancybox({
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'frameWidth'	:	1020, 
		'frameHeight'	:	450,
		'overlayShow'	:	true
	});
	
	jQuery("#dynamic_style").change(function()
	{
		if (jQuery("#dynamic_style").val() == 'NO') {
			var answer = confirm("Are you sure you want to disable the dynamic styles and use the static style sheet? You can also enter custom styles the Custom CSS menu option.")
			if (answer){
				var str2 = jQuery("#dynamic-styling").serialize();
				jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
				{
					window.location = window.location;
				}
				});
			}
		} else {
			var answer = confirm("Are you sure you want to enable the dynamic styles? This will over ride any changes you made to style.css.")
			if (answer){
				var str2 = jQuery("#dynamic-styling").serialize();
				jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
				{
					window.location = window.location;
				}
				});
			}
		}
	});
	
	jQuery("#update-size").click(function()
	{
		var str2 = jQuery("#size-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg5").html("Layout Changes Saved");
			jQuery("#msg5")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
	jQuery("#display_sidebar").change(function()
	{
		if (jQuery("#display_sidebar").val() == 'NO') {
			var answer = confirm("Are you sure you want to disable the sidebar and use full width for your blog posts?")
			if (answer){
				jQuery("#content_width").val('100');
				var str2 = jQuery("#size-options").serialize();
				jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
				{
					window.location = window.location;
				}
				});
			}
		} else {
			var answer = confirm("Are you sure you want to enable the sidebar?")
			if (answer){
				jQuery("#content_width").val('70');
				jQuery("#sidebar_width").val('30');
				var str2 = jQuery("#size-options").serialize();
				jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
				{
					window.location = window.location;
				}
				});
			}
		}
	});
	
	jQuery("#content_width").keyup(function()
	{
		if(jQuery("#content_width").val() == '') {		
		var content_width = 0;
		} else {
		var content_width = parseInt(jQuery("#content_width").val());
		}
		var	sidebar_width = 100 - content_width;
		jQuery("#sidebar_width").val(sidebar_width);
	});
	
	jQuery("#sidebar_width").keyup(function()
	{
		if(jQuery("#sidebar_width").val() == '') {		
		var sidebar_width = 0;
		} else {
		var sidebar_width = parseInt(jQuery("#sidebar_width").val());
		}
		var	content_width = 100 - sidebar_width;
		jQuery("#content_width").val(content_width);
	});

});
</script>