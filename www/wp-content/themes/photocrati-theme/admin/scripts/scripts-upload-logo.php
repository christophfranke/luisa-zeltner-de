<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function()
{
	
	jQuery('#fileUpload').uploadify({
	'uploader'  : '<?php bloginfo('template_url'); ?>/admin/js/uploadify.swf',
	'script'    : '<?php bloginfo('template_url'); ?>/admin/scripts/uploadify.php',
	'auto'      : true,
	'buttonImg'	: '<?php bloginfo('template_url'); ?>/admin/images/upload.jpg',
	'folder'    : '/images/uploads',
	'onComplete': function(event, queueID, fileObj, response, data) {
		 jQuery("#filesUploaded").html('<input type="hidden" id="custom_logo_image" name="custom_logo_image" value="'+fileObj.name+'">');
		 jQuery("#fileName")
		 		.fadeIn('slow')
				.html(fileObj.name+' uploaded successfully!<BR><em>Remember to save.</em>');
	}
	});
	
});
</script>