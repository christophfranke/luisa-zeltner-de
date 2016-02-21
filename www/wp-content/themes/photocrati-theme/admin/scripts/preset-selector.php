<?php

	define('ABSPATH', dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))).'/');
	include_once(ABSPATH.'wp-config.php');
	include_once(ABSPATH.'wp-load.php');
	include_once(ABSPATH.'wp-includes/wp-db.php');
	global $wpdb;
	
	$SQL1 = "DELETE FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1";
	$wpdb->query($SQL1);
	
	$SQL2 = "INSERT INTO ".$wpdb->prefix."photocrati_styles SELECT * FROM ".$wpdb->prefix."photocrati_presets WHERE preset_name = '".$_POST['preset_name']."'";
	$wpdb->query($SQL2);
					
?>

