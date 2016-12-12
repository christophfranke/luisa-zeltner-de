<?php

	define('ABSPATH', dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))).'/');
	include_once(ABSPATH.'wp-config.php');
	include_once(ABSPATH.'wp-load.php');
	include_once(ABSPATH.'wp-includes/wp-db.php');
	global $wpdb;
	
	$file = dirname(dirname(dirname(__FILE__))).'/styles/ngg-reset-donotdelete.css';
	$newfile = dirname(dirname(dirname(__FILE__))).'/nggallery.css';
	copy($file, $newfile);
	
	$SQL = "UPDATE ".$wpdb->prefix."photocrati_styles SET ";
	$SQL = $SQL."nextgen_border='5'";
	$SQL = $SQL.", nextgen_border_color='e8e7e7'";
	
	$wpdb->query($SQL);
					
?>

