<?php
	include "scripts/scripts-setup.php";
	global $wpdb;
	$style = $wpdb->get_results("SELECT dynamic_style FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$dynamic_style = $style->dynamic_style;
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
        
        <?php if($dynamic_style == 'YES') { ?>
        
        <div class="options">Preset Color & Layout Options</div>
        
            <div class="sub-options"><span id="comments">Pick from preset color & layout schemes at the click of a button. <strong>Click the thumbnail for a larger preview</strong>.</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                	<div class="left" id="color-choices" style="z-index:0;">
                    
                    	<p>
                        
                        	<?php
							$presets = $wpdb->get_results("SELECT preset_title,preset_name FROM ".$wpdb->prefix."photocrati_presets");
							foreach ($presets as $presets) {
							?>
								
                                <div class="option">
                                <a href="http://www.photocrati.com/presets/<?php echo str_replace("-", "_", $presets->preset_name); ?>.jpg" id="single_image"><img src="http://www.photocrati.com/presets/<?php echo str_replace("-", "_", $presets->preset_name); ?>_sm.jpg" style="width:225px;" /></a>
                                <input type="button" class="button" id="<?php echo $presets->preset_name; ?>" value="Use <?php echo $presets->preset_title; ?>" />
                                </div>
                                
                            <?php
							}
							?>
                            
                        </p>
                    </div>
                                        
        		</div>
        </div>
        
        <?php } ?>
    
    	<div class="options">NextGen Plugin Files</div>
        
            <div class="sub-options"><span id="comments">This will copy the NextGen plug-in files from your theme directory to the plugins directory</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                <form name="plugin-options" id="plugin-options" method="post">
                
                    <div class="left" style="border:0;width:90%;">
                        
                        <?php 
						$ngdir = dirname(dirname(dirname(dirname(__FILE__)))).'/plugins/nextgen-gallery/'; 
						if (file_exists($ngdir)) {
							echo "<p>Congratulations! NextGEN Gallery is in your plugins directory.</p>";
						}
						?>
                        
                    </div>
                    
                    <div class="right">
                    
                    </div>
                    
                    <div class="submit-button-wrapper">
                            
                        <?php 
						if (!file_exists($ngdir)) {
							$load = dirname(dirname(dirname(dirname(__FILE__)))).'/plugins/'; 
                            if (!is_writable($load)) {
                                echo '<b>You must make the plugins directory writable first</b>!<BR>See <a href="http://codex.wordpress.org/Changing_File_Permissions" target="_blank">the Codex</a> for more information.<BR><BR>';
                            } else {
								echo '<input type="button" class="button" id="update-plugins" value="Move NextGen Now" style="clear:none;" />';
							}
						}
						?>
                    
                    </div>
                    <div id="msg2" style="float:left;"></div>
                
                </form>
                
                </div>
                
        </div>
    
    	<div class="options">Create Default Pages</div>
        
            <div class="sub-options"><span id="comments">*WARNING!* This should only be done on a fresh install of Wordpress!</span></div>
            <div class="option-content">
            
                <div id="option-container">
                
                <form name="page-options" id="page-options" method="post">
                
                    <div class="left" style="border:0;width:90%;">
                    
                        <p class="titles">Default Page Set</p>
                        <p>
                        	By clicking the "Create Pages Now" button below a default set of pages will be created for your website:
                            <BR /><BR />
                            <strong>Home</strong> | <strong>Galleries</strong> | <strong>About</strong> | <strong>Blog</strong> | <strong>Contact</strong>
                            <BR /><BR />
                            This will set the "Blog" page for your posts and the "Home" page as the default page.
                        </p>
                        
                    </div>
                    
                    <div class="right">
                    
                    </div>
                    
                    <div class="submit-button-wrapper">
                        <input type="button" class="button" id="update-pages" value="Create Pages Now" style="clear:none;" /> 
                    </div>
                    <div id="msg" style="float:left;"></div>
                
                </form>
                
                </div>
                
        </div>
    
    </div>
    
</div>