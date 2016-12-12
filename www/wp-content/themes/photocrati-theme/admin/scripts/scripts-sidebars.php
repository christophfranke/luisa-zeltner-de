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

	jQuery("[id$='_color']").ColorPicker({
			onSubmit: function(hsb, hex, rgb, el) {
				jQuery(el).val(hex);
				jQuery(el).ColorPickerHide();
				jQuery(el).css('background-color', '#'+hex);
			},
			onBeforeShow: function () {
				jQuery(this).ColorPickerSetColor(this.value);
				jQuery(this).css('background-color', '#'+this.value);
			}
		})
		.bind('keyup', function(){
			jQuery(this).ColorPickerSetColor(this.value);
	});
		
	jQuery("#reset-sidebar-styles").click(function()
	{
		var answer = confirm("Are you sure you want to reset the sidebar styles? This cannot be undone.")
		if (answer){
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/reset-sidebar-styles.php", data: '', success: function(data)
			{
				window.location = window.location;
			}
			});
		}
	});
	
	jQuery("#sidebar_style").change(function()
	{
		if (jQuery("#sidebar_style").val() == 'color') {
			jQuery("#sidebar_bg_color").val('FFFFFF');
			jQuery("#sidebar-color").show();
		} else {
			jQuery("#sidebar_bg_color").val('transparent');
			jQuery("#sidebar-color").hide();
		}
	});
	
	jQuery("#update-sidebar-c").click(function()
	{
		var str2 = jQuery("#sidebar-bg-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg").html("Sidebar Background Saved");
			jQuery("#msg")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
	jQuery("#update-sidebar-f").click(function()
	{
		var str2 = jQuery("#sidebar-font-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg3").html("Sidebar Fonts Saved");
			jQuery("#msg3")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
	jQuery("#update-sidebar-l").click(function()
	{
		var str2 = jQuery("#sidebar-link-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg2").html("Sidebar Links Saved");
			jQuery("#msg2")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
	jQuery("#update-sidebar-t").click(function()
	{
		var str2 = jQuery("#sidebar-title-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg4").html("Sidebar Title Saved");
			jQuery("#msg4")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
});
</script>