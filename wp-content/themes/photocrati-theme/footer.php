<?php
	/* This code retrieves the footer copyright options */
	global $wpdb;
	$style = $wpdb->get_results("SELECT footer_copy,google_analytics FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$footer_copy = $style->footer_copy;
		$google_analytics = $style->google_analytics;
	}
?>	
         

	<?php 
	if(!is_page()) { 
	if ( is_sidebar_active('footer_widget_area') ) : 
	?>
    
    <script type="text/javascript">
	jQuery.noConflict();
	jQuery(document).ready(function()
	{
		
		var countwidgets = jQuery('.footer-widget-container').size();
		var widgetarea = jQuery('.footer-widget-area').width();
		var widgetsize = widgetarea / countwidgets - 20;
		jQuery('.footer-widget-container').css('width', widgetsize+'px');
			
	});
	</script>
    
	<div id="footer-widgets" class="footer-widget-area">
		<?php dynamic_sidebar('footer_widget_area'); ?>
	</div><!-- #footer .widget-area -->
    
	<?php 
	endif; 
	}
	?>   	
    
		</div><!-- #container -->
    </div><!-- #main -->
    
	<div id="footer">
		<div id="colophon">
		
        	<?php if ( function_exists( wp_nav_menu ) ) { //Check if function exists for less than Wordpress 3.0 ?>
			<?php wp_nav_menu( array( 'container_class' => 'footer_menu', 'menu_class' => '', 'theme_location' => 'footer', 'fallback_cb' => '' ) ); ?>		
        	<?php } ?>
        
			<div id="site-info">
				<p><?php /* This inserts the footer copyright notice */ if($footer_copy <> '') { echo str_replace('\"', '"', str_replace("\'", "'", $footer_copy)).' | '; } ?>Designed by <span id="theme-link"><a href="http://www.photocrati.com/" title="<?php _e( 'Photocrati Wordpress Themes', 'photocrati-framework' ) ?>" rel="designer"><?php _e( 'Photocrati', 'photocrati-framework' ) ?></a></span></p>			
			</div><!-- #site-info -->
			
		</div><!-- #colophon -->
	</div><!-- #footer -->
	
</div><!-- #wrapper -->	

<?php wp_footer(); ?>

<?php /* This inserts the Google Analytics code */ echo str_replace('\"', '"', $google_analytics); ?>

</body>
</html>