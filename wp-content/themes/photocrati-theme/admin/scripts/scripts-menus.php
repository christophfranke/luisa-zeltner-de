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
		
	jQuery("#reset-menu-styles").click(function()
	{
		var answer = confirm("Are you sure you want to reset the menu styles? This cannot be undone.")
		if (answer){
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/reset-menu-styles.php", data: '', success: function(data)
			{
				window.location = window.location;
			}
			});
		}
	});
	
	jQuery("#menu_style").change(function()
	{
		if (jQuery("#menu_style").val() == 'color') {
			jQuery("#menu-style").show();
		} else {
			jQuery("#menu-style").hide();
		}
	});
	
	jQuery("#update-menu-c").click(function()
	{
		var str2 = jQuery("#menu-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg").html("Menu Changes Saved");
			jQuery("#msg")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
	jQuery("#update-submenu-c").click(function()
	{
		var str2 = jQuery("#submenu-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg2").html("Dropdown Changes Saved");
			jQuery("#msg2")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
});
</script>