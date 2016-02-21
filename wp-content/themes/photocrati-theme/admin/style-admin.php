<?php
	include "scripts/scripts-styles.php";
	include "scripts/scripts-upload.php";
	include "scripts/scripts-upload-hb.php";
	global $wpdb;
	$style = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$bg_color = $style->bg_color;
		$bg_image = $style->bg_image;
		$bg_repeat = $style->bg_repeat;
		$header_bg_color = $style->header_bg_color;
		$header_bg_image = $style->header_bg_image;
		$header_bg_repeat = $style->header_bg_repeat;
		$container_color = $style->container_color;
		$container_border = $style->container_border;
		$container_border_color = $style->container_border_color;
		$font_color = $style->font_color;
		$font_size = $style->font_size;
		$font_style = $style->font_style;
		$h1_color = $style->h1_color;
		$h1_size = $style->h1_size;
		$h2_color = $style->h2_color;
		$h2_size = $style->h2_size;
		$h3_color = $style->h3_color;
		$h3_size = $style->h3_size;
		$h4_color = $style->h4_color;
		$h4_size = $style->h4_size;
		$h5_color = $style->h5_color;
		$h5_size = $style->h5_size;
		$link_color = $style->link_color;
		$link_hover_color = $style->link_hover_color;
		$link_hover_style = $style->link_hover_style;
		$bg_top_offset = $style->bg_top_offset;
		$container_padding = $style->container_padding;
	}
?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/admin/js/swfobject.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/admin/js/jquery.uploadify.v2.0.3.js"></script>

<div id="admin-wrapper">

	<div id="header-left">
    <img src="<?php bloginfo('template_directory'); ?>/admin/images/ph-logo.gif" align="absmiddle" />  &nbsp;<a id="view-theme" class="iframe" href="<?php bloginfo('wpurl'); ?>" style="text-decoration:none;" /><input type="button" class="button" value="View Theme" /></a>
    </div>
    
    <div id="header-right">
    <?php theme_version(); ?>
    </div>
    
    <div id="container">
        
        <div class="options">Theme Background</div>
        
            <div class="sub-options"><span id="comments">Change the color or image on the main background</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                <form name="bg-options" id="bg-options" method="post">
                
                    <div class="left-sm">
                        <p class="titles">Background Color</p>
                        <p>#<input type="text" name="bg_color" id="bg_color" value="<?php echo $bg_color; ?>" size="7" style="background:#<?php echo $bg_color; ?>;" /> Color</p>
                    </div>
                    
                    <div class="right-lg">
                        <div class="left" style="border:0;">
                            <p class="titles" style="margin-bottom:4px;">Background Image</p>
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
                            <p class="titles">Current Background Image</p>
                            
                                <div id="fileName">
                                <p>
								<?php if($bg_image <> '') { ?>
									<?php echo $bg_image; ?>
                                    &nbsp;<a id="image_preview" href="<?php bloginfo('template_url'); ?>/images/uploads/<?php echo $bg_image; ?>"><img src="<?php bloginfo('template_url'); ?>/admin/images/view.png" border="0" /></a> 
                                	&nbsp;<a id="delete-image"><img class="delete" src="<?php bloginfo('template_url'); ?>/admin/images/delete.png" border="0" /></a>
                                <?php } else { ?>
                                    <div id="fileName"><p><em>There is currently no image uploaded</em></p></div>
                                <?php } ?>
                                </p>
                                </div>
                                <p>
                                <input type="radio" name="bg_repeat" value="repeat"<?php if($bg_repeat == 'repeat') { echo ' checked'; } ?> /> Tile
                                <BR /><input type="radio" name="bg_repeat" value="no-repeat"<?php if($bg_repeat == 'no-repeat') { echo ' checked'; } ?> /> No Repeat
                                <BR /><input type="radio" name="bg_repeat" value="repeat-x"<?php if($bg_repeat == 'repeat-x') { echo ' checked'; } ?> /> Repeat Horizontal
                                <BR /><input type="radio" name="bg_repeat" value="repeat-y"<?php if($bg_repeat == 'repeat-y') { echo ' checked'; } ?> /> Repeat Vertical
                                <BR />Offset <input type="text" name="bg_top_offset" id="bg_top_offset" value="<?php echo $bg_top_offset; ?>" size="2" />px From Top
                                </p>
                            
                        </div>
                    </div>
                    
                    <div class="submit-button-wrapper">
                        <input type="button" class="button" id="update-background" value="Save Main Background" style="clear:none;" /> 
                    </div>
                    <div id="msg" style="float:left;"></div>
                
                </form>
                
                </div>
                
        </div>
        
        <div class="options">Header Background</div>
        
            <div class="sub-options"><span id="comments">Change the color or image on the header background</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                <form name="header-options" id="header-options" method="post">
                
                    <div class="left-sm">
                        <p class="titles">Background Color</p>
                        <p>#<input type="text" name="header_bg_color" id="header_bg_color" value="<?php echo $header_bg_color; ?>" size="7" style="background:#<?php echo $header_bg_color; ?>;" /> Color</p>
                    </div>
                    
                    <div class="right-lg">
                        <div class="left" style="border:0;">
                            <p class="titles" style="margin-bottom:4px;">Background Image</p>
                            <?php 
								$load = dirname(dirname(__FILE__)).'/images/uploads/'; 
								if (!is_writable($load)) {
									echo '<p class="warning"><b>The uploads directory images/uploads must be writable</b>!<BR><em>See <a href="http://codex.wordpress.org/Changing_File_Permissions" target="_blank">the Codex</a> for more information.</em></p>';
								} else {
									echo '<input type="file" name="fileUploadh" id="fileUploadh" />';
								}							
							?>
                            <div id="filesUploadedh"></div>
                        </div>
                        <div class="right">
                            <p class="titles">Current Background Image</p>
                            
                                <div id="fileNameh">
                                <p>
								<?php if($header_bg_image <> '') { ?>
									<?php echo $header_bg_image; ?> 
                                    &nbsp;<a id="image_preview" href="<?php bloginfo('template_url'); ?>/images/uploads/<?php echo $header_bg_image; ?>"><img src="<?php bloginfo('template_url'); ?>/admin/images/view.png" border="0" /></a>
                                    &nbsp;<a id="delete-header-image"><img class="delete" src="<?php bloginfo('template_url'); ?>/admin/images/delete.png" border="0" /></a>
                                <?php } else { ?>
                                    <div id="fileNameh"><p><em>There is currently no image uploaded</em></p></div>
                                <?php } ?>
                                </p>
                                </div>
                                <p>
                                <input type="radio" name="header_bg_repeat" value="repeat"<?php if($header_bg_repeat == 'repeat') { echo ' checked'; } ?> /> Tile
                                <BR /><input type="radio" name="header_bg_repeat" value="no-repeat"<?php if($header_bg_repeat == 'no-repeat') { echo ' checked'; } ?> /> No Repeat
                                <BR /><input type="radio" name="header_bg_repeat" value="repeat-x"<?php if($header_bg_repeat == 'repeat-x') { echo ' checked'; } ?> /> Repeat Horizontal
                                <BR /><input type="radio" name="header_bg_repeat" value="repeat-y"<?php if($header_bg_repeat == 'repeat-y') { echo ' checked'; } ?> /> Repeat Vertical
                                </p>
                            
                        </div>
                    </div>
                    
                    <div class="submit-button-wrapper">
                        <input type="button" class="button" id="update-header" value="Save Header Background" style="clear:none;" /> 
                    </div>
                    <div id="msg11" style="float:left;"></div>
                
                </form>
                
                </div>
                
        </div>
        
        <div class="options">Content Background</div>
        
            <div class="sub-options"><span id="comments">Change the color of the content area background</span></div>
            <div class="option-content">
            
            	<div id="option-container">
                
                    <div class="left" style="border-right:0;">
                    
                        <form name="container-options" id="container-options" method="post">
                        
                            <div class="inner">
                                <p class="titles">Background Style</p>
                                <p>
                                <select id="container_style">
                                    <option value="transparent"<?php if($container_color == 'transparent') {echo ' SELECTED'; } ?>>Transparent </option>
                                    <option value="color"<?php if($container_color <> 'transparent') {echo ' SELECTED'; } ?>>Color </option>
                                </select>
                                </p>
                            </div>
                            <div class="inner" id="container-color"<?php if($container_color == 'transparent') {echo ' style="display:none;"'; } ?>>
                                <p class="titles">Background Color</p>
                                <p>#<input type="text" name="container_color" id="container_color" value="<?php if($container_color <> 'transparent') { echo $container_color; } else { echo 'transparent'; } ?>" size="7"  <?php if($container_color <> 'transparent') { ?>style="background:#<?php echo $container_color; ?>;"<?php } ?> /> Color</p>
                            </div>
                            
                            <div class="submit-button-wrapper">
                                <input type="button" class="button" id="update-container" value="Save Content Background" style="clear:none;" /> 
                            </div>
                            <div id="msg10" style="float:left;"></div>
                        
                    </div>
                    
                    <div class="right">
                    	
                            <div class="inner" style="width:30%;" id="container-border"<?php if($container_color == 'transparent') {echo ' style="display:none;"'; } ?>>
                                <p class="titles">Border</p>
                                <p><input type="text" name="container_border" id="container_border" value="<?php echo $container_border; ?>" size="2" />px</p>
                            </div>  
                            
                            <div class="inner" style="width:36%;" id="container-border-color"<?php if($container_color == 'transparent') {echo ' style="display:none;"'; } ?>>
                                <p class="titles">Border Color</p>
                                <p>#<input type="text" name="container_border_color" id="container_border_color" value="<?php echo $container_border_color; ?>" size="7"  style="background:#<?php echo $container_border_color; ?>;" /> Color</p>
                            </div>    
                            
                            <div class="inner" style="width:33%;" id="container-padding"<?php if($container_color == 'transparent') {echo ' style="display:none;"'; } ?>>
                                <p class="titles">Content Padding</p>
                                <p><input type="text" name="container_padding" id="container_padding" value="<?php echo $container_padding; ?>" size="2" />px</p>
                            </div>     
                                                                            
                    </div>
                    
                    </form>
                
                </div>
                        
            </div>
            
            
        <div class="options">Content Font Styles</div>
        
            <div class="sub-options"><span id="comments">Change the color, size and style of the content fonts (sidebar controlled separately)</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                    <div class="left" style="border-right:0;">
                    
                        <form name="font-options" id="font-options" method="post">
                        
                            <div class="inner">
                                <p class="titles">Font Color</p>
                                <p>#<input type="text" name="font_color" id="font_color" value="<?php echo $font_color; ?>" size="7" style="background:#<?php echo $font_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">Font Size</p>
                                <p><input type="text" name="font_size" id="font_size" value="<?php echo $font_size; ?>" size="2" />px</p>
                            </div>
                            
                            <div class="submit-button-wrapper">
                                <input type="button" class="button" id="update-font" value="Save Font" style="clear:none;" /> 
                            </div>
                            <div id="msg2" style="float:left;"></div>
                        
                        
                    </div>
                    
                    <div class="right">
                    	
                        	<div class="inner">
                                <p class="titles">Font Style</p>
                                <p>
                                <select name="font_style" style="font-family:<?php echo str_replace('\"', '"', $font_style).';'; ?>font-size:14px;">
                                <?php
									$fonts = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_fonts ORDER BY font_name");
									foreach ($fonts as $fonts) {
										echo '<option value="'.str_replace('"', '\"', $fonts->font_value).'"';
										if(str_replace('\"', '"', $font_style) == $fonts->font_value) {
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
        
            <div class="sub-options"><span id="comments">Change the color and size of the H1-H5 tags</span></div>   
            <div class="option-content"> 
                
                <div id="option-container">
                
                    <div class="left">
                    
                    	<form name="h-options" id="h-options" method="post">
                        
                            <div class="inner">
                                <p class="titles">H1 Color</p>
                                <p>#<input type="text" name="h1_color" id="h1_color" value="<?php echo $h1_color; ?>" size="7" style="background:#<?php echo $h1_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">H1 Size</p>
                                <p><input type="text" name="h1_size" id="h1_size" value="<?php echo $h1_size; ?>" size="2" />px</p>
                            </div>
                            
                    </div>
                    
                    <div class="right">
                        
                            <div class="inner">
                                <p class="titles">H2 Color</p>
                                <p>#<input type="text" name="h2_color" id="h2_color" value="<?php echo $h2_color; ?>" size="7" style="background:#<?php echo $h2_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">H2 Size</p>
                                <p><input type="text" name="h2_size" id="h2_size" value="<?php echo $h2_size; ?>" size="2" />px</p>
                            </div>
                        
                    </div>
                
                </div>
                
                
                <div id="option-container">
                
                    <div class="left">
                        
                            <div class="inner">
                                <p class="titles">H3 Color</p>
                                <p>#<input type="text" name="h3_color" id="h3_color" value="<?php echo $h3_color; ?>" size="7" style="background:#<?php echo $h3_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">H3 Size</p>
                                <p><input type="text" name="h3_size" id="h3_size" value="<?php echo $h3_size; ?>" size="2" />px</p>
                            </div>
                        
                    </div>
                    
                    <div class="right">
                        
                            <div class="inner">
                                <p class="titles">H4 Color</p>
                                <p>#<input type="text" name="h4_color" id="h4_color" value="<?php echo $h4_color; ?>" size="7" style="background:#<?php echo $h4_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">H4 Size</p>
                                <p><input type="text" name="h4_size" id="h4_size" value="<?php echo $h4_size; ?>" size="2" />px</p>
                            </div>
                        
                    </div>
                
                </div>
                
                <div id="option-container">
                
                    <div class="left">
                        
                            <div class="inner">
                                <p class="titles">H5 Color</p>
                                <p>#<input type="text" name="h5_color" id="h5_color" value="<?php echo $h5_color; ?>" size="7" style="background:#<?php echo $h5_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">H5 Size</p>
                                <p><input type="text" name="h5_size" id="h5_size" value="<?php echo $h5_size; ?>" size="2" />px</p>
                            </div>
                            
                            <div class="submit-button-wrapper">
                                <input type="button" class="button" id="update-h" value="Save H1-H5 Settings" style="clear:none;" /> 
                            </div>
                            <div id="msg3" style="float:left;"></div>
                            
                        </form>
                        
                    </div>
                    
                    <div class="right">
                        
                    </div>
                
                </div>
                
        	</div>
                       
            
        <div class="options">Link Styles</div>
        
            <div class="sub-options"><span id="comments">Change the color and hover style of the links</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                    <div class="left" style="border-right:0;">
                    
                        <form name="link-options" id="link-options" method="post">
                        
                            <div class="inner">
                                <p class="titles">Link Color</p>
                                <p>#<input type="text" name="link_color" id="link_color" value="<?php echo $link_color; ?>" size="7" style="background:#<?php echo $link_color; ?>;" /> Color</p>
                            </div>
                            <div class="inner">
                                <p class="titles">Hover Color</p>
                                <p>#<input type="text" name="link_hover_color" id="link_hover_color" value="<?php echo $link_hover_color; ?>" size="7" style="background:#<?php echo $link_hover_color; ?>;" /> Color</p>
                            </div>
                            
                            <div class="submit-button-wrapper">
                                <input type="button" class="button" id="update-link-c" value="Save Links" style="clear:none;" /> 
                            </div>
                            <div id="msg4" style="float:left;"></div>
                        
                    </div>
                    
                    <div class="right">
                    
                            <div class="inner">
                                <p class="titles">Hover Style</p>
                                <p>
                                <select name="link_hover_style">
                                    <option value="none"<?php if($link_hover_style == 'none') {echo ' SELECTED'; } ?>>None </option>
                                    <option value="underline"<?php if($link_hover_style == 'underline') {echo ' SELECTED'; } ?>>Underline </option>
                                    <option value="overline"<?php if($link_hover_style == 'overline') {echo ' SELECTED'; } ?>>Overline </option>
                                </select>
                                </p>
                            </div>
                                                        
                        </form>
                        
                    </div>
                
                </div>
                        
            </div>
    
    </div>

</div>