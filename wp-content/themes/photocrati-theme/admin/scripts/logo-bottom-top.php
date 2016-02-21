<?php

	define('ABSPATH', dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))).'/');
	include_once(ABSPATH.'wp-config.php');
	include_once(ABSPATH.'wp-load.php');
	include_once(ABSPATH.'wp-includes/wp-db.php');
	global $wpdb;
	
	$SQL = "UPDATE ".$wpdb->prefix."photocrati_styles SET ";
	
	$SQL = $SQL."logo_menu_position='bottom-top', ";
	$SQL = $SQL."header_logo_margin_above='60', ";
	$SQL = $SQL."header_logo_margin_below='20' ";
	
	$SQL = $SQL." WHERE option_set = 1";
	
	$wpdb->query($SQL);
					
?>

