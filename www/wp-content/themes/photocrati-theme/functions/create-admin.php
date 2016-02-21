<?php

// Create custom admin menus

global $wpdb;
$style = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
foreach ($style as $style) {
	$dynamic_style = $style->dynamic_style;
}
add_action('admin_menu', 'adminMenu');

function adminMenu(){
	global $wpdb,$newversion;
	$style = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$dynamic_style = $style->dynamic_style;
	}
	add_menu_page('Theme Options', 'Theme Options', 'administrator', 'set-up', 'SetUp', get_template_directory_uri().'/admin/images/admin-icon.png',1);  
	add_submenu_page('set-up', 'Quick Set-up', 'Quick Set-up', 'administrator', 'set-up', 'SetUp'); 
	add_submenu_page('set-up', 'General Options', 'General Options', 'administrator', 'general-options', 'ThemeOptions'); 
	add_submenu_page('set-up', 'Header & Footer', 'Header & Footer', 'administrator', 'theme-header-footer', 'ThemeHeader');
	
	if($dynamic_style == 'YES') {
	add_submenu_page('set-up', 'Styles - General', 'Styles - General', 'administrator', 'theme-style', 'ThemeStyle'); 
	add_submenu_page('set-up', 'Styles - Menu', 'Styles - Menu', 'administrator', 'theme-menu-style', 'ThemeMenu'); 
	add_submenu_page('set-up', 'Styles - Sidebar', 'Styles - Sidebar', 'administrator', 'theme-sidebar-style', 'ThemeSidebar'); 
	add_submenu_page('set-up', 'Styles - NextGen', 'Styles - NextGen', 'administrator', 'theme-nextgen-style', 'ThemeNextgen');
	add_submenu_page('set-up', 'Custom CSS', 'Custom CSS', 'administrator', 'theme-css', 'ThemeCss'); 
	}
	
	add_submenu_page('set-up', 'Custom Sidebar', 'Custom Sidebar', 'administrator', 'theme-sidebar-cust', 'ThemeCustSidebar');
	add_submenu_page('set-up', 'Social Media', 'Social Media', 'administrator', 'social-media', 'SocialMedia');
	add_submenu_page('set-up', 'Google Analytics', 'Google Analytics', 'administrator', 'google-analytics', 'GoogleAnalytics'); 
	add_submenu_page('set-up', 'Theme Updates', 'Theme Updates', 'administrator', 'theme-updates-v'.$newversion, 'ThemeUpdates'); 
	add_submenu_page('set-up', 'Help & Support', 'Help & Support', 'administrator', 'help-support', 'HelpSupport'); 
}

function SetUp(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/jquery.fancybox-1.2.6.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.fancybox-1.2.6.pack.js"></script>';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/setup-admin.php";
}
	
function ThemeOptions(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/jquery.fancybox-1.2.6.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.fancybox-1.2.6.pack.js"></script>';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/options-admin.php";
}

function ThemeHeader(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/colorpicker.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/colorpicker.js"></script>';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/jquery.fancybox-1.2.6.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.fancybox-1.2.6.pack.js"></script>';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/header-admin.php";
}

if($dynamic_style == 'YES') {	
	
function ThemeStyle(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/colorpicker.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/colorpicker.js"></script>';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/jquery.fancybox-1.2.6.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.fancybox-1.2.6.pack.js"></script>';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/style-admin.php";
}

function ThemeMenu(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/colorpicker.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/colorpicker.js"></script>';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/jquery.fancybox-1.2.6.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.fancybox-1.2.6.pack.js"></script>';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/menu-admin.php";
}

function ThemeSidebar(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/colorpicker.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/colorpicker.js"></script>';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/jquery.fancybox-1.2.6.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.fancybox-1.2.6.pack.js"></script>';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/sidebar-admin.php";
}

function ThemeNextgen(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/colorpicker.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/colorpicker.js"></script>';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/jquery.fancybox-1.2.6.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.fancybox-1.2.6.pack.js"></script>';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/nextgen-admin.php";
}

}	

function ThemeCustSidebar(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/colorpicker.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/colorpicker.js"></script>';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/jquery.fancybox-1.2.6.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.fancybox-1.2.6.pack.js"></script>';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/sidebar-cust.php";
}

function ThemeCss(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/jquery.fancybox-1.2.6.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.fancybox-1.2.6.pack.js"></script>';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/css-admin.php";
}

function SocialMedia(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/jquery.fancybox-1.2.6.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.fancybox-1.2.6.pack.js"></script>';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/social-admin.php";
}	

function GoogleAnalytics(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/jquery.fancybox-1.2.6.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.fancybox-1.2.6.pack.js"></script>';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/analytics-admin.php";
}		

function ThemeUpdates(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.get_template_directory_uri().'/admin/css/jquery.fancybox-1.2.6.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.fancybox-1.2.6.pack.js"></script>';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/theme-updates.php";
}

function HelpSupport(){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/admin/admin.css" />';
	echo '<script type="text/javascript" src="'.get_template_directory_uri().'/admin/js/jquery.corner.js"></script>';
	include TEMPLATEPATH."/admin/help.php";
}

?>