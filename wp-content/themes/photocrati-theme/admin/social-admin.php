<?php
	include "scripts/scripts-social.php";
	global $wpdb;
	$style = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$social_media = $style->social_media;
		$social_media_title = $style->social_media_title;
		$social_media_set = $style->social_media_set;
		$social_rss = $style->social_rss;
		$social_email = $style->social_email;
		$social_twitter = $style->social_twitter;
		$social_facebook = $style->social_facebook;
	}
	define('ABSPATH', dirname(dirname(dirname(__FILE__))).'/');
?>

<div id="admin-wrapper">

	<div id="header-left">
    <img src="<?php bloginfo('template_directory'); ?>/admin/images/ph-logo.gif" align="absmiddle" /> &nbsp;<a id="view-theme" class="iframe" href="<?php bloginfo('wpurl'); ?>" style="text-decoration:none;" /><input type="button" class="button" value="View Theme" /></a> <input type="button" class="button" id="reset-social" value="Reset Social" />
	</div>
    
    <div id="header-right">
    <?php theme_version(); ?>
    </div>
    
    <div id="container">
    
    	<div class="options">Social Media Settings</div>
        
            <div class="sub-options"><span id="comments">Enable / disable social media icons on the sidebar & choose the style</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                <form name="social-options" id="social-options" method="post">
                
                    <div class="left" style="border:0;">
                    
                        <p class="titles">Social Media Icons</p>
                        <p>
                        	<select name="social_media" id="social_media">
                                <option value="OFF"<?php if($social_media == 'OFF') {echo ' SELECTED'; } ?>>OFF </option>
                                <option value="ON"<?php if($social_media == 'ON') {echo ' SELECTED'; } ?>>ON </option>
                            </select>
                        </p>
                        
                    </div>
                    
                    <div class="right" id="social-title" <?php if($social_media <> 'ON') { echo 'style="display:none;"'; } ?>>
                    
                    	<p class="titles">Sidebar Title (leave blank for no title)</p>
                        <p>
                        	<input type="text" name="social_media_title" value="<?php echo $social_media_title; ?>" size="50" />
                        </p>
                    
                    </div>
                    
                    <div id="social-settings" style="clear:both;<?php if($social_media <> 'ON') { echo 'display:none;'; } ?>">
                    
                        <div class="left" style="border:0;">
                            <p class="titles">Icon Set</p>
                            <p>
                            <em>Small Icons</em><BR />
                            <input type="radio" name="social_media_set" value="small"<?php if($social_media_set == 'small') {echo ' CHECKED'; } ?> /> &nbsp;
                            <img src="<?php bloginfo('template_directory'); ?>/images/social/small-set.png" align="absmiddle" />
                            </p>
                            <p>
                            <em>Chrome Icons</em><BR />
                            <input type="radio" name="social_media_set" value="chrome"<?php if($social_media_set == 'chrome') {echo ' CHECKED'; } ?> /> &nbsp;
                            <img src="<?php bloginfo('template_directory'); ?>/images/social/chrome-set.png" align="absmiddle" />
                            </p>
                            <p>
                            <em>Polaroid Icons</em><BR />
                            <input type="radio" name="social_media_set" value="polaroid"<?php if($social_media_set == 'polaroid') {echo ' CHECKED'; } ?> /> &nbsp;
                            <img src="<?php bloginfo('template_directory'); ?>/images/social/polaroid-set.png" align="absmiddle" />
                            </p>
                        </div>
                        
                        <div class="right">
                        
                        	<p class="titles">URLs (leave blank to exclude)</p>
                            
                            <p>
                            <em>RSS Feed (please include http://)</em><BR />
                            <input type="text" name="social_rss" size="50" value="<?php echo $social_rss; ?>" />
                            </p>
                            
                            <p>
                            <em>Email Address</em><BR />
                            <input type="text" name="social_email" size="50" value="<?php echo $social_email; ?>" />
                            </p>
                            
                            <p>
                            <em>Twitter</em><BR />
                            http://www.twitter.com/<input type="text" name="social_twitter" size="25" value="<?php echo $social_twitter; ?>" />
                            </p>
                            
                            <p>
                            <em>Facebook</em><BR />
                            http://www.facebook.com/<input type="text" name="social_facebook" size="25" value="<?php echo $social_facebook; ?>" />
                            </p>
                        
                        </div>
                    
                    </div>
                    
                    <div class="submit-button-wrapper">
                        <input type="button" class="button" id="update-social" value="Save Social Media" style="clear:none;" /> 
                    </div>
                    <div id="msg" style="float:left;"></div>
                
                </form>
                
                </div>
                
        </div>
    
    </div>
    
</div>