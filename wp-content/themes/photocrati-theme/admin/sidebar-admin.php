<?php
	include "scripts/scripts-sidebars.php";
	global $wpdb;
	$style = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$sidebar_bg_color = $style->sidebar_bg_color;
		$sidebar_link_color = $style->sidebar_link_color;
		$sidebar_link_hover_color = $style->sidebar_link_hover_color;
		$sidebar_link_hover_style = $style->sidebar_link_hover_style;
		$sidebar_font_color = $style->sidebar_font_color;
		$sidebar_font_size = $style->sidebar_font_size;
		$sidebar_font_style = $style->sidebar_font_style;
		$sidebar_title_color = $style->sidebar_title_color;
		$sidebar_title_size = $style->sidebar_title_size;
		$sidebar_title_style = $style->sidebar_title_style;
	}
?>

<div id="admin-wrapper">

	<div id="header-left">
    <img src="<?php bloginfo('template_directory'); ?>/admin/images/ph-logo.gif" align="absmiddle" />  &nbsp;<a id="view-theme" class="iframe" href="<?php bloginfo('wpurl'); ?>" style="text-decoration:none;" /><input type="button" class="button" value="View Theme" /></a>
    </div>
    
    <div id="header-right">
    <?php theme_version(); ?>
    </div>
    
    <div id="container">
    
        <div class="options">Background</div>
        
            <div class="sub-options"><span id="comments">Change the color of the sidebar background</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                    <div class="left" style="border-right:0;">
                    
                        <form name="sidebar-bg-options" id="sidebar-bg-options" method="post">
                        
                            <div class="inner">
                                <p class="titles">Sidebar Background Style</p>
                                <p>
                                <select id="sidebar_style">
                                    <option value="transparent"<?php if($sidebar_bg_color == 'transparent') {echo ' SELECTED'; } ?>>Transparent </option>
                                    <option value="color"<?php if($sidebar_bg_color <> 'transparent') {echo ' SELECTED'; } ?>>Color </option>
                                </select>
                                </p>
                            </div>
                            <div class="inner" id="sidebar-color"<?php if($sidebar_bg_color == 'transparent') {echo ' style="display:none;"'; } ?>>
                                <p class="titles">Sidebar Background Color</p>
                                <p>#<input type="text" name="sidebar_bg_color" id="sidebar_bg_color" value="<?php if($sidebar_bg_color <> 'transparent') { echo $sidebar_bg_color; } else { echo 'transparent'; } ?>" size="7"  <?php if($sidebar_bg_color <> 'transparent') { ?>style="background:#<?php echo $sidebar_bg_color; ?>;"<?php } ?> /> Color</p>
                            </div>
                            
                            <div class="submit-button-wrapper">
                                <input type="button" class="button" id="update-sidebar-c" value="Save Background" style="clear:none;" /> 
                            </div>
                            <div id="msg" style="float:left;"></div>
                        
                        </form>
                        
                    </div>
                
                </div>
                        
            </div>
        
        
        <div class="options">Font Styles</div>
        
            <div class="sub-options"><span id="comments">Change the color, size and style of the sidebar fonts</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                    <div class="left" style="border-right:0;">
                    
                        <form name="sidebar-font-options" id="sidebar-font-options" method="post">
                        
                            <div class="inner">
                                <p class="titles">Font Color</p>
                                <p>#<input type="text" name="sidebar_font_color" id="sidebar_font_color" value="<?php echo $sidebar_font_color; ?>" size="7" style="background:#<?php echo $sidebar_font_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">Font Size</p>
                                <p><input type="text" name="sidebar_font_size" id="sidebar_font_size" value="<?php echo $sidebar_font_size; ?>" size="2" />px</p>
                            </div>
                            
                            <div class="submit-button-wrapper">
                                <input type="button" class="button" id="update-sidebar-f" value="Save Fonts" style="clear:none;" /> 
                            </div>
                            <div id="msg3" style="float:left;"></div>
                        
                    </div>
                    
                    <div class="right">
                        
                            <div class="inner">
                                <p class="titles">Font Style</p>
                                <p>
                                <select name="sidebar_font_style" style="font-family:<?php echo str_replace('\"', '"', $sidebar_font_style).';'; ?>font-size:14px;">
                                <?php
									$fonts = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_fonts ORDER BY font_name");
									foreach ($fonts as $fonts) {
										echo '<option value="'.str_replace('"', '\"', $fonts->font_value).'"';
										if(str_replace('\"', '"', $sidebar_font_style) == $fonts->font_value) {
										echo " SELECTED"; 
										}
										echo ' style="font-family:'.str_replace('"', '\"', $fonts->font_value).';font-size:14px;">'.$fonts->font_name.' </option>';
									}
								?>
                            	</select>
                                </p>
                            </div>
                            
                        </form>
                    
                    </div>
                
                </div>
                        
            </div>
        
        <div class="options">Title Styles</div>
        
            <div class="sub-options"><span id="comments">Change the color, size and style of the sidebar titles</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                    <div class="left" style="border-right:0;">
                    
                        <form name="sidebar-title-options" id="sidebar-title-options" method="post">
                        
                            <div class="inner">
                                <p class="titles">Title Color</p>
                                <p>#<input type="text" name="sidebar_title_color" id="sidebar_title_color" value="<?php echo $sidebar_title_color; ?>" size="7" style="background:#<?php echo $sidebar_title_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">Title Size</p>
                                <p><input type="text" name="sidebar_title_size" id="sidebar_title_size" value="<?php echo $sidebar_title_size; ?>" size="2" />px</p>
                            </div>
                            
                            <div class="submit-button-wrapper">
                                <input type="button" class="button" id="update-sidebar-t" value="Save Titles" style="clear:none;" /> 
                            </div>
                            <div id="msg4" style="float:left;"></div>
                        
                    </div>
                    
                    <div class="right">
                        
                            <div class="inner">
                                <p class="titles">Title Style</p>
                                <p>
                                <select name="sidebar_title_style" style="font-family:<?php echo str_replace('\"', '"', $sidebar_title_style).';'; ?>font-size:14px;">
                                <?php
									$fonts = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_fonts ORDER BY font_name");
									foreach ($fonts as $fonts) {
										echo '<option value="'.str_replace('"', '\"', $fonts->font_value).'"';
										if(str_replace('\"', '"', $sidebar_title_style) == $fonts->font_value) {
										echo " SELECTED"; 
										}
										echo ' style="font-family:'.str_replace('"', '\"', $fonts->font_value).';font-size:14px;">'.$fonts->font_name.' </option>';
									}
								?>
                            	</select>
                                </p>
                            </div>
                            
                        </form>
                    
                    </div>
                
                </div>
                        
            </div>
            
        <div class="options">Link Styles</div>
        
            <div class="sub-options"><span id="comments">Change the color and style of the sidebar links</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                    <div class="left" style="border-right:0;">
                    
                        <form name="sidebar-link-options" id="sidebar-link-options" method="post">
                        
                            <div class="inner">
                                <p class="titles">Link Color</p>
                                <p>#<input type="text" name="sidebar_link_color" id="sidebar_link_color" value="<?php echo $sidebar_link_color; ?>" size="7" style="background:#<?php echo $sidebar_link_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">Hover Color</p>
                                <p>#<input type="text" name="sidebar_link_hover_color" id="sidebar_link_hover_color" value="<?php echo $sidebar_link_hover_color; ?>" size="7" style="background:#<?php echo $sidebar_link_hover_color; ?>;" /> Color</p>
                            </div>
                            
                            <div class="submit-button-wrapper">
                                <input type="button" class="button" id="update-sidebar-l" value="Save Links" style="clear:none;" /> 
                            </div>
                            <div id="msg2" style="float:left;"></div>
                        
                    </div>
                    
                    <div class="right">
                        
                            <div class="inner">
                                <p class="titles">Hover Style</p>
                                <p>
                                <select name="sidebar_link_hover_style">
                                    <option value="none"<?php if($sidebar_link_hover_style == 'none') {echo ' SELECTED'; } ?>>None </option>
                                    <option value="underline"<?php if($sidebar_link_hover_style == 'underline') {echo ' SELECTED'; } ?>>Underline </option>
                                    <option value="overline"<?php if($sidebar_link_hover_style == 'overline') {echo ' SELECTED'; } ?>>Overline </option>
                                </select>
                                </p>
                            </div>
                            
                        </form>
                    
                    </div>
                
                </div>
                        
            </div>
    
    </div>

</div>