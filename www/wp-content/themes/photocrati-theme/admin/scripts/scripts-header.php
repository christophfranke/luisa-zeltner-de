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
	
	jQuery("[id$='_preview']").fancybox();

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
	
	jQuery("#reset-header").click(function()
	{
		var answer = confirm("Are you sure you want to reset the header & footer? This cannot be undone.")
		if (answer){
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/reset-header.php", data: '', success: function(data)
			{
				window.location = window.location;
			}
			});
		}
	});
	
	jQuery("#custom_logo").change(function()
	{
		if (jQuery("#custom_logo").val() == 'custom') {
			jQuery("#right-lg").show();
			jQuery("#right-lg-custom").hide();
			jQuery("#right-lg-custom2").hide();
			jQuery("#left-sm-custom").hide();
		} else {
			jQuery("#right-lg").hide();
			jQuery("#right-lg-custom").show();
			jQuery("#right-lg-custom2").show();
			jQuery("#left-sm-custom").show();
		}
	});
	
	jQuery("#update-logo").click(function()
	{
		var str2 = jQuery("#logo-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg").html("Logo Changes Saved");
			jQuery("#msg")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
			if(jQuery('#custom_logo_image').length == 0){ } else {
			jQuery("#fileName").html(jQuery('#custom_logo_image').val()+'');
			}
		}
		});
	});
	
	jQuery("#delete-image").click(function()
	{
		var answer = confirm("Are you sure you want to remove the custom logo? It will remain in your theme directory under images/uploads.")
		if (answer){
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/delete-logo.php", data: "custom_logo=default&custom_logo_image=", success: function(data)
			{
				jQuery("#msg").html("Background image removed");
				jQuery("#msg")
					.fadeIn('slow')
					.animate({opacity: 1.0}, 2000)
					.fadeOut('slow');
				jQuery("#fileName").html('<em>There is currently no image uploaded</em>');
			}
			});
		}
	});
	
	jQuery("#update-sizes").click(function()
	{
		var str2 = jQuery("#header-sizes").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg4").html("Header Height & Logo Padding Saved");
			jQuery("#msg4")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
	jQuery("#left-right").click(function()
	{
		var answer = confirm("Are you sure you want to set your logo to the left and your menu to the right?")
		if (answer){
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/logo-left-right.php", data: '', success: function(data)
			{
				window.location = window.location;
			}
			});
		}
	});	
	
	jQuery("#right-left").click(function()
	{
		var answer = confirm("Are you sure you want to set your logo to the right and your menu to the left?")
		if (answer){
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/logo-right-left.php", data: '', success: function(data)
			{
				window.location = window.location;
			}
			});
		}
	});	
	
	jQuery("#bottom-top").click(function()
	{
		var answer = confirm("Are you sure you want to set your logo to the bottom and your menu to the top?")
		if (answer){
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/logo-bottom-top.php", data: '', success: function(data)
			{
				window.location = window.location;
			}
			});
		}
	});	
	
	jQuery("#top-bottom").click(function()
	{
		var answer = confirm("Are you sure you want to set your logo to the top and your menu to the bottom?")
		if (answer){
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/logo-top-bottom.php", data: '', success: function(data)
			{
				window.location = window.location;
			}
			});
		}
	});	
	
	jQuery("#update-footer-font").click(function()
	{
		var str2 = jQuery("#footer-font").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg9").html("Footer Font Saved");
			jQuery("#msg9")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
	jQuery("#update-footer").click(function()
	{
		var str2 = jQuery("#footer-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg2").html("Footer Copyright Saved");
			jQuery("#msg2")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
});
</script>