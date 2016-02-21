<?php
	include "scripts/scripts-menus.php";
	global $wpdb;
	$style = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$menu_style = $style->menu_style;
		$menu_color = $style->menu_color;
		$menu_hover_color = $style->menu_hover_color;
		$menu_font_size = $style->menu_font_size;
		$menu_font_style = $style->menu_font_style;
		$menu_font_color = $style->menu_font_color;
		$menu_font_hover_color = $style->menu_font_hover_color;
		$submenu_color = $style->submenu_color;
		$submenu_hover_color = $style->submenu_hover_color;
		$submenu_font_size = $style->submenu_font_size;
		$submenu_font_style = $style->submenu_font_style;
		$submenu_font_color = $style->submenu_font_color;
		$submenu_font_hover_color = $style->submenu_font_hover_color;
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
    
        <div class="options">Parent Menu Items</div>
        
            <div class="sub-options"><span id="comments">Change the color of menus and menu text</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                    <div class="left" style="width:100%;">
                    
                        <form name="menu-options" id="menu-options" method="post">
                        
                            <div class="inner" style="width:25%;">
                                <p class="titles">Menu Background Style</p>
                                <p>
                                <select id="menu_style" name="menu_style">
                                    <option value="transparent"<?php if($menu_style == 'transparent') {echo ' SELECTED'; } ?>>Transparent </option>
                                    <option value="color"<?php if($menu_style <> 'transparent') {echo ' SELECTED'; } ?>>Color </option>
                                </select>
                                </p>
                            </div>
                            <div class="inner" style="width:25%;">
                            <BR />
                            </div>
                    		
                            <div id="menu-style"<?php if($menu_style == 'transparent') {echo ' style="display:none;"'; } ?>>
                                <div class="inner" style="width:25%;">
                                    <p class="titles">Background Color</p>
                                    <p>#<input type="text" name="menu_color" id="menu_color" value="<?php echo $menu_color; ?>" size="7" style="background:#<?php echo $menu_color; ?>;" /> Color</p>
                                </div>
                                <div class="inner" style="width:25%;">
                                    <p class="titles">Hover / Active Color</p>
                                    <p>#<input type="text" name="menu_hover_color" id="menu_hover_color" value="<?php echo $menu_hover_color; ?>" size="7" style="background:#<?php echo $menu_hover_color; ?>;" /> Color</p>
                                </div>
                            </div>      
                        
                        
                    </div>
                    
                    <div class="left" style="width:100%;">
                            
                            <div class="inner" style="width:25%;">
                                <p class="titles">Font Color</p>
                                <p>#<input type="text" name="menu_font_color" id="menu_font_color" value="<?php echo $menu_font_color; ?>" size="7" style="background:#<?php echo $menu_font_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner" style="width:25%;">
                                <p class="titles">Font Hover/Active Color</p>
                                <p>#<input type="text" name="menu_font_hover_color" id="menu_font_hover_color" value="<?php echo $menu_font_hover_color; ?>" size="7" style="background:#<?php echo $menu_font_hover_color; ?>;" /> Color</p>
                            </div>
                    
                    		<div class="inner" style="width:25%;">
                                <p class="titles">Font Size</p>
                                <p><input type="text" name="menu_font_size" id="menu_font_size" value="<?php echo $menu_font_size; ?>" size="2" />px</p>
                            </div>
                            <div class="inner" style="width:25%;">
                                <p class="titles">Font Style</p>
                                <p>
                                <select name="menu_font_style" style="font-family:<?php echo str_replace('\"', '"', $menu_font_style).';'; ?>font-size:14px;">
                                <?php
									$fonts = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_fonts ORDER BY font_name");
									foreach ($fonts as $fonts) {
										echo '<option value="'.str_replace('"', '\"', $fonts->font_value).'"';
										if(str_replace('\"', '"', $menu_font_style) == $fonts->font_value) {
										echo " SELECTED"; 
										}
										echo ' style="font-family:'.str_replace('"', '\"', $fonts->font_value).';font-size:14px;">'.$fonts->font_name.' </option>';
									}
								?>
                            	</select>
                                </p>
                            </div>
                            
                            <div class="submit-button-wrapper">
                                <input type="button" class="button" id="update-menu-c" value="Save Menu Changes" style="clear:none;" /> 
                            </div>
                            <div id="msg" style="float:left;"></div>
                       
                       </form>
                                               
                    </div>
                
                </div>
                        
            </div>
            
        <div class="options">Dropdown Menu Items</div>
        
            <div class="sub-options"><span id="comments">Change the color of dropdown menus and dropdown menu text</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                    <div class="left">
                    
                        <form name="submenu-options" id="submenu-options" method="post">
                        
                            <div class="inner">
                                <p class="titles">Background Color</p>
                                <p>#<input type="text" name="submenu_color" id="submenu_color" value="<?php echo $submenu_color; ?>" size="7" style="background:#<?php echo $submenu_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">Hover / Active Color</p>
                                <p>#<input type="text" name="submenu_hover_color" id="submenu_hover_color" value="<?php echo $submenu_hover_color; ?>" size="7" style="background:#<?php echo $submenu_hover_color; ?>;" /> Color</p>
                            </div>
                            
                            <div class="inner">
                                <p class="titles">Font Color</p>
                                <p>#<input type="text" name="submenu_font_color" id="submenu_font_color" value="<?php echo $submenu_font_color; ?>" size="7" style="background:#<?php echo $submenu_font_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">Font Hover / Active Color</p>
                                <p>#<input type="text" name="submenu_font_hover_color" id="submenu_font_hover_color" value="<?php echo $submenu_font_hover_color; ?>" size="7" style="background:#<?php echo $submenu_font_hover_color; ?>;" /> Color</p>
                            </div>
                            
                            <div class="submit-button-wrapper">
                                <input type="button" class="button" id="update-submenu-c" value="Save Dropdown Changes" style="clear:none;" /> 
                            </div>
                            <div id="msg2" style="float:left;"></div>
                        
                        
                        
                    </div>
                    
                    <div class="right">
                    
                    		<div class="inner">
                                <p class="titles">Font Size</p>
                                <p><input type="text" name="submenu_font_size" id="submenu_font_size" value="<?php echo $submenu_font_size; ?>" size="2" />px</p>
                            </div>
                            <div class="inner">
                                <p class="titles">Font Style</p>
                                <p>
                                <select name="submenu_font_style" style="font-family:<?php echo str_replace('\"', '"', $submenu_font_style).';'; ?>font-size:14px;">
                                <?php
									$fonts = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_fonts ORDER BY font_name");
									foreach ($fonts as $fonts) {
										echo '<option value="'.str_replace('"', '\"', $fonts->font_value).'"';
										if(str_replace('\"', '"', $submenu_font_style) == $fonts->font_value) {
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
    
    </div>
    
    </div>

</div>