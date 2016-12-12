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
	
	jQuery("a#single_image").fancybox();
	
	jQuery('[id^=preset-]').click(function()
	{
		var answer = confirm("Are you sure you want to use this preset style? This cannot be undone and will overwrite any customizations you have done thus far.")
		if (answer){
			var currentId = jQuery(this).attr('id');
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/preset-selector.php", data: "preset_name="+currentId, success: function(data)
			{
				window.location = window.location;
			}
			});
		}
	});	

	jQuery("#update-pages").click(function()
	{
		var answer = confirm("Are you sure you want create the default page set now? This should only be done on a fresh install of Wordpress!")
		if (answer){
			var str2 = jQuery("#page-options").serialize();
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/setup-pages.php", data: str2, success: function(data)
			{
				jQuery("#msg").html("Pages Created Successfully!");
				jQuery("#msg")
					.fadeIn('slow')
					.animate({opacity: 1.0}, 2000)
					.fadeOut('slow');
			}
			});
		}
	});

	jQuery("#update-plugins").click(function()
	{
		var str2 = jQuery("#plugin-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/setup-nggallery.php", data: str2, success: function(data)
		{
			jQuery("#msg2").html("NextGen Moved!");
			jQuery("#msg2")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
			alert("Please activate the plugin now by going to Plugins and clicking the Activate link under NextGEN Gallery");
			window.location = window.location;
		}
		});
	});
	
});
</script>