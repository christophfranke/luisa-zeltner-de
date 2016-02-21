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
	
	jQuery("#reset-styles").click(function()
	{
		var answer = confirm("Are you sure you want to reset the general styles? This cannot be undone.")
		if (answer){
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/reset-styles.php", data: '', success: function(data)
			{
				window.location = window.location;
			}
			});
		}
	});
	
	jQuery("#update-background").click(function()
	{
		var str2 = jQuery("#bg-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg").html("Background Changes Saved");
			jQuery("#msg")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
			if(jQuery('#bg_image').length == 0){ } else {
			jQuery("#fileName").html(jQuery('#bg_image').val()+'');
			}
		}
		});
	});
	
	jQuery("#update-header").click(function()
	{
		var str2 = jQuery("#header-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg11").html("Header Changes Saved");
			jQuery("#msg11")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
			if(jQuery('#header_bg_image').length == 0){ } else {
			jQuery("#fileNameh").html(jQuery('#header_bg_image').val()+'');
			}
		}
		});
	});
	
	jQuery("#container_style").change(function()
	{
		if (jQuery("#container_style").val() == 'color') {
			jQuery("#container_color").val('FFFFFF');
			jQuery("#container-color").show();
			jQuery("#container-border").show();
			jQuery("#container-border-color").show();
		} else {
			jQuery("#container_color").val('transparent');
			jQuery("#container-color").hide();
			jQuery("#container-border").hide();
			jQuery("#container-border-color").hide();
		}
	});
	
	jQuery("#update-container").click(function()
	{
		var str2 = jQuery("#container-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg10").html("Content Changes Saved");
			jQuery("#msg10")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
	jQuery("#delete-image").click(function()
	{
		var answer = confirm("Are you sure you want to remove the background image? It will remain in your theme directory under images/uploads.")
		if (answer){
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/delete-background.php", data: "bg_image=", success: function(data)
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
	
	jQuery("#delete-header-image").click(function()
	{
		var answer = confirm("Are you sure you want to remove the header background image? It will remain in your theme directory under images/uploads.")
		if (answer){
			jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/delete-header-background.php", data: "header_bg_image=", success: function(data)
			{
				jQuery("#msg11").html("Background image removed");
				jQuery("#msg11")
					.fadeIn('slow')
					.animate({opacity: 1.0}, 2000)
					.fadeOut('slow');
				jQuery("#fileNameh").html('<em>There is currently no image uploaded</em>');
			}
			});
		}
	});
	
	jQuery("#update-font").click(function()
	{
		var str2 = jQuery("#font-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg2").html("Fonts Updated");
			jQuery("#msg2")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
	jQuery("#update-h").click(function()
	{
		var str2 = jQuery("#h-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg3").html("H1-H5 Updated");
			jQuery("#msg3")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});
	
	jQuery("#update-link-c").click(function()
	{
		var str2 = jQuery("#link-options").serialize();
		jQuery.ajax({type: "POST", url: "<?php bloginfo('template_url'); ?>/admin/scripts/edit-styles.php", data: str2, success: function(data)
		{
			jQuery("#msg4").html("Link Style Updated");
			jQuery("#msg4")
				.fadeIn('slow')
				.animate({opacity: 1.0}, 2000)
				.fadeOut('slow');
		}
		});
	});

});
</script>