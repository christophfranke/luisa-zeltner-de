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
	
	jQuery("#custom_sidebar").change(function()
	{
		if (jQuery("#custom_sidebar").val() == 'ON') {
			jQuery("#custom-sidebar-position").show();
			jQuery("#sidebar-html").show();
		} else {
			jQuery("#custom-sidebar-position").hide();
			jQuery("#sidebar-html").hide();
			var str2 = jQuery("#sidebar-options").serialize();
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
			{
			}
			});
		}
	});
	
	jQuery("#update-sidebar").click(function()
	{
		var str2 = jQuery("#sidebar-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg").html("Custom Sidebar Saved");
			jQuery("#msg")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
});
</script>