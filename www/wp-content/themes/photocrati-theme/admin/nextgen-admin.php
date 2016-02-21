<?php
	include "scripts/scripts-nextgen.php";
	global $wpdb;
	$style = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$nextgen_border = $style->nextgen_border;
		$nextgen_border_color = $style->nextgen_border_color;
	}
?>

<div id="admin-wrapper">

	<div id="header-left">
    <img src="<?php bloginfo('template_directory'); ?>/admin/images/ph-logo.gif" align="absmiddle" /> &nbsp;<a id="view-theme" class="iframe" href="<?php bloginfo('wpurl'); ?>" style="text-decoration:none;" /><input type="button" class="button" value="View Theme" /></a> <input type="button" class="button" id="reset-nextgen-styles" value="Reset NG Styles" />
    </div>
    
    <div id="header-right">
    <?php theme_version(); ?>
    </div>
    
    <div id="container">
    
        <div class="options">Main Page Gallery</div>
        
            <div class="sub-options"><span id="comments">Change the color and size of the main page gallery border</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                    <div class="left" style="border-right:0;width:75%;">
                    
                        <form name="nextgen-options" id="nextgen-options" method="post">
                        
                            <div class="inner">
                                <p class="titles">Border Size (use 0 for none)</p>
                                <p><input type="text" name="nextgen_border" id="nextgen_border" value="<?php echo $nextgen_border; ?>" size="2" />px</p>
                            </div>
                            <div class="inner">
                                <p class="titles">Border Color</p>
                                <p>#<input type="text" name="nextgen_border_color" id="nextgen_border_color" value="<?php echo $nextgen_border_color; ?>" size="7"  style="background:#<?php echo $nextgen_border_color; ?>;" /> Color</p>
                            </div>
                            
                            <div class="submit-button-wrapper">
                                <input type="button" class="button" id="update-nextgen" value="Save Border" style="clear:none;" /> 
                            </div>
                            <div id="msg" style="float:left;"></div>
                        
                        </form>
                        
                    </div>
                
                </div>
                        
            </div>
        
        
        <div class="options">NextGen Style Sheet</div>
        
            <div class="sub-options"><span id="comments">You can make adjustments to the style sheet nggallery.css here.</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                	<div class="left" style="border-right:0;width:100%;">
                
                		<form name="nextgen-style" id="nextgen-style" method="post">
                
                			<div class="inner" style="width:100%;">
                            
								<?php $load = dirname(dirname(__FILE__)).'/nggallery.css'; ?>
                        
                                <p class="titles">Edit Style Sheet</p>
                                <?php
                                if (!is_writable($load)) {
                                    echo '<p><b>You must make the file nggallery.css writable</b> to use this form. See <a href="http://codex.wordpress.org/Changing_File_Permissions" target="_blank">the Codex</a> for more information.</p>';
                                }
								?>
                                <p>
                                <textarea name="nggallery" rows="20" cols="100"<?php if (!is_writable($load)) { echo '  disabled="yes"';} ?>><?php $file = implode('', file($load)); print "$file"; ?></textarea>
                                </p>
                            
                            </div>
                            
                            <div class="submit-button-wrapper">
                            	<?php
                                if (!is_writable($load)) { } else { echo '<input type="button" class="button" id="update-nggallery" value="Save Style Sheet" style="clear:none;" /> '; }
								?>
                            </div>
                            <div id="msg2" style="float:left;"></div>
                    
                    	</form>
                        
                    </div>
                
                </div>
                        
            </div>
        
    
    </div>

</div>