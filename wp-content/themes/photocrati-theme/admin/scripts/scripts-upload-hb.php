<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function()
{
	
	jQuery('#fileUploadh').uploadify({
	'uploader'  : '<?php bloginfo('template_url'); ?>/admin/js/uploadify.swf',
	'script'    : '<?php bloginfo('template_url'); ?>/admin/scripts/uploadify.php',
	'auto'      : true,
	'buttonImg'	: '<?php bloginfo('template_url'); ?>/admin/images/upload.jpg',
	'folder'    : '/images/uploads',
	'onComplete': function(event, queueID, fileObj, response, data) {
		 jQuery("#filesUploadedh").html('<input type="hidden" id="header_bg_image" name="header_bg_image" value="'+fileObj.name+'">');
		 jQuery("#fileNameh")
		 		.fadeIn('slow')
				.html(fileObj.name+' uploaded successfully!<BR><em>Remember to save.</em>');
	}
	});
	
});
</script>