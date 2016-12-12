<?php
	/* IMPORTANT! This code retrieves the custom logo options & dynamic styling */
	global $wpdb;
	$style = $wpdb->get_results("SELECT custom_logo,custom_logo_image,dynamic_style FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$custom_logo = $style->custom_logo;
		$custom_logo_image = $style->custom_logo_image;
		$dynamic_style =  $style->dynamic_style;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }       
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
	
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<!-- IMPORTANT! Do not remove this code. This is used for enabling & disabling the dynamic styling -->
		<?php if($dynamic_style == 'YES') { ?>
        
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/dynamic-style.php" />
            
        <?php } else { ?>
        
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
        
        <?php } ?>
    <!-- End dynamic styling -->
	
    <!--[if IE 8]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-ie.css" type="text/css" />
    <![endif]-->
    
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-ie7.css" type="text/css" />
    <![endif]-->
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_enqueue_script('jquery'); ?>
	
	<?php wp_head(); ?>
	
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'photocrati-framework' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'photocrati-framework' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	
</head>

<body <?php body_class(); ?>>

<div id="header">
		<div id="masthead">
		
			<div id="branding">
				<div id="blog-title">
                    <span>
                        <a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home">
                            <?php if($custom_logo == 'custom') { ?>
                                <img src="<?php bloginfo('template_directory'); ?>/images/uploads/<?php echo $custom_logo_image; ?>" border="0" alt="<?php bloginfo( 'name' ) ?>" />
                            <?php } else if($custom_logo == 'default') { ?>
                            	<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" border="0" alt="<?php bloginfo( 'name' ) ?>" />
                            <?php } else { ?>
                                <h1><?php bloginfo('name'); ?></h1>
                                <div class="description"><?php bloginfo('description'); ?></div>
                            <?php } ?>
                        </a>
                    </span>
                </div>
			</div><!-- #branding -->
			
			<div id="menu_wrapper">
                <?php if ( function_exists( wp_nav_menu ) ) { //Check if function exists for less than Wordpress 3.0 ?>
                <?php wp_nav_menu( array( 'container_class' => 'menu', 'menu_class' => '', 'theme_location' => 'primary' ) ); ?>
                <?php } else { ?>
                <?php wp_page_menu( 'sort_column=menu_order' ); ?>	
                <?php } ?>	
			</div><!-- #access -->
			
		</div><!-- #masthead -->	
</div><!-- #header -->

<div id="wrapper" class="hfeed">

	<div id="main">
