<?php
	include "scripts/scripts-header.php";
	include "scripts/scripts-upload-logo.php";
	global $wpdb;
	$style = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$dynamic_style = $style->dynamic_style;
		$logo_menu_position = $style->logo_menu_position;
		$custom_logo = $style->custom_logo;
		$custom_logo_image = $style->custom_logo_image;
		$footer_copy = $style->footer_copy;
		$header_height = $style->header_height;
		$header_logo_margin_above = $style->header_logo_margin_above;
		$header_logo_margin_below = $style->header_logo_margin_below;
		$title_size = $style->title_size;
		$title_color = $style->title_color;
		$title_style = $style->title_style;
		$description_size = $style->description_size;
		$description_color = $style->description_color;
		$description_style = $style->description_style;
		$footer_font = $style->footer_font;
		$footer_font_color = $style->footer_font_color;
	}
?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/admin/js/swfobject.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/admin/js/jquery.uploadify.v2.0.3.js"></script>

<div id="admin-wrapper">

	<div id="header-left">
    <img src="<?php bloginfo('template_directory'); ?>/admin/images/ph-logo.gif" align="absmiddle" /> &nbsp;<a id="view-theme" class="iframe" href="<?php bloginfo('wpurl'); ?>" style="text-decoration:none;" /><input type="button" class="button" value="View Theme" /></a> <input type="button" class="button" id="reset-header" value="Reset Head/Foot" />
	</div>
    
    <div id="header-right">
    <?php theme_version(); ?>
    </div>
    
    <div id="container">
    
    	<div class="options">Header Logo</div>
        
            <div class="sub-options"><span id="comments">Upload your own logo (225px by 90px recommended) or use the blog title / description</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                <form name="logo-options" id="logo-options" method="post">
                
                    <div class="left-sm">
                        <p class="titles">Logo Options</p>
                        <p>
                        	<select name="custom_logo" id="custom_logo">
                                <option value="title"<?php if($custom_logo == 'title') {echo ' SELECTED'; } ?>>Wordpress Title </option>
                                <option value="custom"<?php if($custom_logo == 'custom') {echo ' SELECTED'; } ?>>Custom Logo </option>
                            </select>
                        </p>
                    </div>
                    
                    <div class="right-lg" id="right-lg-custom" <?php if($custom_logo == 'custom') { echo 'style="display:none;"'; } ?>>
                        <div class="left" style="border:0;width:25%;">
                            <p class="titles">Title Size</p>
                            <p><input type="text" name="title_size" id="title_size" value="<?php echo $title_size; ?>" size="2" />px</p>
                        </div>
                        <div class="right" style="width:70%;">
                            <div class="inner">
                                <p class="titles">Title Color</p>
                                <p>#<input type="text" name="title_color" id="title_color" value="<?php echo $title_color; ?>" size="7" style="background:#<?php echo $title_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">Title Style</p>
                                <p>
                                <select name="title_style" style="font-family:<?php echo str_replace('\"', '"', $title_style).';'; ?>font-size:14px;">
                                <?php
									$fonts = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_fonts ORDER BY font_name");
									foreach ($fonts as $fonts) {
										echo '<option value="'.str_replace('"', '\"', $fonts->font_value).'"';
										if(str_replace('\"', '"', $title_style) == $fonts->font_value) {
										echo " SELECTED"; 
										}
										echo ' style="font-family:'.str_replace('"', '\"', $fonts->font_value).';font-size:14px;">'.$fonts->font_name.' </option>';
									}
								?>
                            	</select>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="left-sm" id="left-sm-custom" <?php if($custom_logo == 'custom') { echo 'style="display:none;"'; } ?>>
                        <p class="titles"></p>
                    </div>
                    
                    <div class="right-lg" id="right-lg-custom2" <?php if($custom_logo == 'custom') { echo 'style="display:none;"'; } ?>>
                        <div class="left" style="border:0;width:25%;">
                            <p class="titles">Description Size</p>
                            <p><input type="text" name="description_size" id="description_size" value="<?php echo $description_size; ?>" size="2" />px</p>
                        </div>
                        <div class="right" style="width:70%;">
                            <div class="inner">
                                <p class="titles">Description Color</p>
                                <p>#<input type="text" name="description_color" id="description_color" value="<?php echo $description_color; ?>" size="7" style="background:#<?php echo $description_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">Description Style</p>
                                <p>
                                <select name="description_style" style="font-family:<?php echo str_replace('\"', '"', $description_style).';'; ?>font-size:14px;">
                                <?php
									$fonts = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_fonts ORDER BY font_name");
									foreach ($fonts as $fonts) {
										echo '<option value="'.str_replace('"', '\"', $fonts->font_value).'"';
										if(str_replace('\"', '"', $description_style) == $fonts->font_value) {
										echo " SELECTED"; 
										}
										echo ' style="font-family:'.str_replace('"', '\"', $fonts->font_value).';font-size:14px;">'.$fonts->font_name.' </option>';
									}
								?>
                            	</select>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="right-lg" id="right-lg" <?php if($custom_logo <> 'custom') { echo 'style="display:none;"'; } ?>>
                        <div class="left" style="border:0;">
                            <p class="titles" style="margin-bottom:4px;">Upload a Custom logo</p>
                            <?php 
								$load = dirname(dirname(__FILE__)).'/images/uploads/'; 
								if (!is_writable($load)) {
									echo '<p class="warning"><b>The uploads directory images/uploads must be writable</b>!<BR><em>See <a href="http://codex.wordpress.org/Changing_File_Permissions" target="_blank">the Codex</a> for more information.</em></p>';
								} else {
									echo '<input type="file" name="fileUpload" id="fileUpload" />';
								}						
							?>
                            <div id="filesUploaded"></div>
                        </div>
                        <div class="right">
                            <p class="titles">Current Custom Logo</p>
                            <?php if($custom_logo_image <> '') { ?>
                                <div id="fileName">
                                <p><?php echo $custom_logo_image; ?>
                                &nbsp;<a id="image_preview" href="<?php bloginfo('template_url'); ?>/images/uploads/<?php echo $custom_logo_image; ?>"><img src="<?php bloginfo('template_url'); ?>/admin/images/view.png" border="0" /></a> 
                                &nbsp;<a id="delete-image"><img class="delete" src="<?php bloginfo('template_url'); ?>/admin/images/delete.png" border="0" /></a> 
                                </p>
                                </div>
                            <?php } else { ?>
                                <div id="fileName"><p><em>There is currently no logo uploaded</em></p></div>
                            <?php } ?>
                        </div>
                    </div>
                    
                    <div class="submit-button-wrapper">
                        <input type="button" class="button" id="update-logo" value="Save Logo" style="clear:none;" /> 
                    </div>
                    <div id="msg" style="float:left;"></div>
                
                </form>
                
                </div>
                
        </div>
        
        <?php if($dynamic_style == 'YES') { ?>
        <div class="options">Header Height & Logo Padding</div>
        
            <div class="sub-options"><span id="comments">If you are using a large logo you can adjust the header height and logo padding here</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                <form name="header-sizes" id="header-sizes" method="post">
                
                    <div class="left-sm">
                        <p class="titles">Header Height</p>
                        <p><input type="text" name="header_height" id="header_height" value="<?php echo $header_height; ?>" size="2" />px</p>
                    </div>
                    
                    <div class="right-lg" id="right-lg">
                        <div class="left" style="border:0;">
                            <p class="titles">Logo Top Padding</p>
                        	<p><input type="text" name="header_logo_margin_above" id="header_logo_margin_above" value="<?php echo $header_logo_margin_above; ?>" size="2" />px</p>
                        </div>
                        <div class="right">
                            <p class="titles">Logo Bottom Padding</p>
                        	<p><input type="text" name="header_logo_margin_below" id="header_logo_margin_below" value="<?php echo $header_logo_margin_below; ?>" size="2" />px</p>
                        </div>
                    </div>
                    
                    <div class="submit-button-wrapper">
                        <input type="button" class="button" id="update-sizes" value="Save Height & Logo Margins" style="clear:none;" /> 
                    </div>
                    <div id="msg4" style="float:left;"></div>
                
                </form>
                
                </div>
                
        </div>
        
                
        <div class="options">Logo & Menu Positions</div>
        
            <div class="sub-options"><span id="comments">Choose the positions of the menu and logo. Click the button of choice to select the desired position.</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                <form name="logo-menu-options" id="logo-menu-options" method="post">
                
                    <div class="left" id="color-choices" style="overflow:hidden;">
                    
                    	<p>
                            <div class="option">
                            <img src="<?php bloginfo('template_directory'); ?>/admin/images/logo-left-right.jpg" />
                            <input type="button" class="button" id="left-right" value="Logo Left / Menu Right" /> 
                            <?php if($logo_menu_position == 'left-right') { ?>
                            <img src="<?php bloginfo('template_directory'); ?>/admin/images/check.png" style="border:0;" align="absmiddle" />
                            <?php } ?>
                            </div>
                            <div class="option">
                            <img src="<?php bloginfo('template_directory'); ?>/admin/images/logo-right-left.jpg" />
                            <input type="button" class="button" id="right-left" value="Logo Right / Menu Left" /> 
                            <?php if($logo_menu_position == 'right-left') { ?>
                            <img src="<?php bloginfo('template_directory'); ?>/admin/images/check.png" style="border:0;" align="absmiddle" />
                            <?php } ?>
                            </div>
                            <div class="option">
                            <img src="<?php bloginfo('template_directory'); ?>/admin/images/logo-bottom-top.jpg" />
                            <input type="button" class="button" id="bottom-top" value="Logo Bottom / Menu Top" /> 
                            <?php if($logo_menu_position == 'bottom-top') { ?>
                            <img src="<?php bloginfo('template_directory'); ?>/admin/images/check.png" style="border:0;" align="absmiddle" />
                            <?php } ?>
                            </div>
                        </p>
                        
                        <p>
                            <div class="option">
                            <img src="<?php bloginfo('template_directory'); ?>/admin/images/logo-top-bottom.jpg" />
                            <input type="button" class="button" id="top-bottom" value="Logo Top / Menu Bottom" /> 
                            <?php if($logo_menu_position == 'top-bottom') { ?>
                            <img src="<?php bloginfo('template_directory'); ?>/admin/images/check.png" style="border:0;" align="absmiddle" />
                            <?php } ?>
                            </div>
                        </p>
                        
                    </div>
                    
                </form>
                
                </div>
                
        </div>
        
        <div class="options">Footer Font</div>
        
            <div class="sub-options"><span id="comments">Here you can set the footer font color and size</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                <form name="footer-font" id="footer-font" method="post">
                
                    <div class="left-sm">
                        <p class="titles">Font Size</p>
                        <p><input type="text" name="footer_font" id="footer_font" value="<?php echo $footer_font; ?>" size="2" />px</p>
                    </div>
                    
                    <div class="right-lg" id="right-lg">
                        <div class="left" style="border:0;">
                            <p class="titles">Font Color</p>
                        	<p>#<input type="text" name="footer_font_color" id="footer_font_color" value="<?php echo $footer_font_color; ?>" size="7"  style="background:#<?php echo $footer_font_color; ?>;" /> Color</p>
                        </div>
                    </div>
                    
                    <div class="submit-button-wrapper">
                        <input type="button" class="button" id="update-footer-font" value="Save Footer Font" style="clear:none;" /> 
                    </div>
                    <div id="msg9" style="float:left;"></div>
                
                </form>
                
                </div>
                
        </div>
        <?php } ?>
        
        <div class="options">Footer Copyright</div>
        
            <div class="sub-options"><span id="comments">Set a custom copyright to display in your footer</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                <form name="footer-options" id="footer-options" method="post">
                
                    <div class="left">
                    
                    	<p class="titles">Footer Copyright</p>
                        <p>
                        <input type="text" name="footer_copy" value="<?php echo str_replace("\'", "'", $footer_copy); ?>" size="60" />
                        </p>
                        
                    </div>
                    
                    <div class="right">
                        
                    </div>
                        
                    <div class="submit-button-wrapper">
                        <input type="button" class="button" id="update-footer" value="Save Footer Copyright" style="clear:none;" /> 
                    </div>
                    <div id="msg2" style="float:left;"></div>
                    
                </form>
                
                </div>
                
        </div>
    
    </div>
    
</div>