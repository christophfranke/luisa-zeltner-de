<?php
	include "scripts/scripts-sidebar-cust.php";
	global $wpdb;
	$style = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$custom_sidebar = $style->custom_sidebar;
		$custom_sidebar_position = $style->custom_sidebar_position;
		$custom_sidebar_html = $style->custom_sidebar_html;
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
    
    	<div class="options">Settings</div>
                    
        <form name="sidebar-options" id="sidebar-options" method="post">
        
            <div class="sub-options"><span id="comments">Enable / disable custom sidebar content and set the position</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                    <div class="left" style="border:0;">
                    
                    	<div class="inner">
                    
                            <p class="titles">Custom sidebar content</p>
                            <p>
                                <select name="custom_sidebar" id="custom_sidebar">
                                    <option value="OFF"<?php if($custom_sidebar == 'OFF') {echo ' SELECTED'; } ?>>OFF </option>
                                    <option value="ON"<?php if($custom_sidebar == 'ON') {echo ' SELECTED'; } ?>>ON </option>
                                </select>
                            </p>
                        
                        </div>
                        
                    </div>
                    
                    <div class="right" id="custom-sidebar-position" <?php if($custom_sidebar <> 'ON') { echo 'style="display:none;"'; } ?>>
                        
                        <div class="inner">
                    
                            <p class="titles">Above or below widgets?</p>
                            <p>
                                <select name="custom_sidebar_position">
                                    <option value="ABOVE"<?php if($custom_sidebar_position == 'ABOVE') {echo ' SELECTED'; } ?>>ABOVE </option>
                                    <option value="BELOW"<?php if($custom_sidebar_position == 'BELOW') {echo ' SELECTED'; } ?>>BELOW </option>
                                </select>
                            </p>
                        
                        </div>
                    
                    </div>
                
                </div>
                
        </div>
        
        
        <div id="sidebar-html" <?php if($custom_sidebar <> 'ON') { echo 'style="display:none;"'; } ?>>
        
        <div class="options">HTML</div>
        
            <div class="sub-options"><span id="comments">Insert HTML to appear on the sidebar</span></div>
            <div class="option-content">
            
                <div id="option-container">
                    
                        <div class="left" style="border:0;width:58%;">
                            <p class="titles">Insert HTML</p>
                            <p>
                            
                            <textarea name="custom_sidebar_html" id="custom_sidebar_html" cols="55" rows="10"><?php echo str_replace('\"', '"', $custom_sidebar_html); ?></textarea>
                            
                            </p>
                        
                        </div>
                        
                        <div class="right" style="border:0;width:40%;">
                            <p class="titles">Tips</p>
                            <p>
                            
                            <em>Use an H3 tag with a class of "widget-title" to use the existing sidebar title style:</em>
                            <BR /><BR />
                            &lt;h3 class="widget-title"&gt;Title&lt;/h3&gt;
                            
                            </p>
                        </div>
                    
                    <div class="submit-button-wrapper">
                        <input type="button" class="button" id="update-sidebar" value="Save Custom Sidebar" style="clear:none;" /> 
                    </div>
                    <div id="msg" style="float:left;"></div>
                
                </div>
                        
           	</form>
                
        </div>
                    
        </div>
    
    
    
    </div>
    
</div>