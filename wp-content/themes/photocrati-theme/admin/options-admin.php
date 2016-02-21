<?php
	include "scripts/scripts-options.php";
	global $wpdb;
	$style = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$dynamic_style = $style->dynamic_style;
		$display_sidebar = $style->display_sidebar;
		$content_width = $style->content_width;
		$sidebar_width = $style->sidebar_width;
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
    	
        <div class="options">Dynamic Styling</div>
        
            <div class="sub-options"><span id="comments">Disable or enable the dynamic styling. If the dynamic styling is disabled you can use style.css to customize your theme.</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                	<div class="left" style="border-right:0;">
                    
                        <form name="dynamic-stying" id="dynamic-styling" method="post">
                        
                            <div class="inner" style="width:100%;">
                                <p class="titles">Dynamic Styling Enabled?</p>
                                <p>
                                <select name="dynamic_style" id="dynamic_style">
                                    <option value="YES"<?php if($dynamic_style == 'YES') {echo ' SELECTED'; } ?>>YES </option>
                                    <option value="NO"<?php if($dynamic_style == 'NO') {echo ' SELECTED'; } ?>>NO </option>
                                </select>
                                </p>
                            </div>
                            
                            <div id="msg11" style="float:left;"></div>
                        
                        </form>
                        
                    </div>
                                        
        		</div>
        </div>
        
        
        <div class="options">Blog Layout Sizes</div>
        
            <div class="sub-options"><span id="comments">Change the width of the blog content & sidebar. You can also disable your sidebar and use full width for posts.</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                	<div class="left" style="border-right:0;">
                    
                        <form name="size-options" id="size-options" method="post">
                        
                            <div class="inner">
                                <p class="titles">Content Area Width</p>
                                <p><input type="text" name="content_width" id="content_width" value="<?php echo $content_width; ?>" size="2" />%</p>
                            </div>
                            
                            <div class="inner">
                                <p class="titles">Use Blog Sidebar?</p>
                                <p>
                                <select name="display_sidebar" id="display_sidebar">
                                    <option value="YES"<?php if($display_sidebar == 'YES') {echo ' SELECTED'; } ?>>YES </option>
                                    <option value="NO"<?php if($display_sidebar == 'NO') {echo ' SELECTED'; } ?>>NO </option>
                                </select>
                                </p>
                            </div>
                            
                            <div class="submit-button-wrapper">
                                <input type="button" class="button" id="update-size" value="Save Layout Sizes" style="clear:none;" /> 
                            </div>
                            <div id="msg5" style="float:left;"></div>
                        
                        
                        
                    </div>
                    
                    <div class="right">
                    
							<div class="inner"<?php if($display_sidebar == 'NO') {echo ' style="visibility:hidden;"'; } ?>>
                                <p class="titles">Sidebar Area Width</p>
                                <p><input type="text" name="sidebar_width" id="sidebar_width" value="<?php echo $sidebar_width; ?>" size="2" />%</p>
                            </div>                    	
                          
                        </form>
                                                
                    </div>
                    
        		</div>
        </div>
    
    </div>

</div>