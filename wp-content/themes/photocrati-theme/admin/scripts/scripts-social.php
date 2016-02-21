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
	
	jQuery("#reset-social").click(function()
	{
		var answer = confirm("Are you sure you want to reset the social media options? This cannot be undone.")
		if (answer){
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/reset-social.php", data: '', success: function(data)
			{
				window.location = window.location;
			}
			});
		}
	});
	
	jQuery("#social_media").change(function()
	{
		if (jQuery("#social_media").val() == 'ON') {
			jQuery("#social-settings").show();
			jQuery("#social-title").show();
		} else {
			jQuery("#social-settings").hide();
			jQuery("#social-title").hide();
		}
	});
	
	jQuery("#update-social").click(function()
	{
		var str2 = jQuery("#social-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg").html("Social Media Options Saved");
			jQuery("#msg")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
});
</script>