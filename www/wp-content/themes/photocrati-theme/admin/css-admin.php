<?php
	include "scripts/scripts-css.php";
	global $wpdb;
	$style = $wpdb->get_results("SELECT custom_css FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$custom_css = $style->custom_css;
	}
?>

<div id="admin-wrapper">

	<div id="header-left">
    <img src="<?php bloginfo('template_directory'); ?>/admin/images/ph-logo.gif" align="absmiddle" /> &nbsp;<a id="view-theme" class="iframe" href="<?php bloginfo('wpurl'); ?>" style="text-decoration:none;" /><input type="button" class="button" value="View Theme" /></a>
	</div>
    
    <div id="header-right">
    <?php theme_version(); ?>
    </div>
    
    <div id="container">
    
    	<div class="options">Custom CSS Code</div>
        
            <div class="sub-options"><span id="comments">If you insert code with custom classes you can style it here! You can also over ride theme styles.</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                <form name="css-options" id="css-options" method="post">
                
                    <div class="left" style="border:0;">
                    
                        <p class="titles">CSS Code (leave blank to exclude)</p>
                        <p>
                        	<textarea name="custom_css" cols="80" rows="10"><?php echo str_replace("\'", "'", str_replace('\"', '"', $custom_css)); ?></textarea>
                        </p>
                        
                    </div>
                    
                    <div class="right">
                    
                    </div>
                    
                    <div class="submit-button-wrapper">
                        <input type="button" class="button" id="update-css" value="Update Custom CSS" style="clear:none;" /> 
                    </div>
                    <div id="msg" style="float:left;"></div>
                
                </form>
                
                </div>
                
        </div>
    
    </div>
    
</div>