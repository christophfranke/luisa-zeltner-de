<?php

	define('ABSPATH', dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))).'/');
	include_once(ABSPATH.'wp-config.php');
	include_once(ABSPATH.'wp-load.php');
	include_once(ABSPATH.'wp-includes/wp-db.php');
	global $wpdb;
	
	$SQL = "UPDATE ".$wpdb->prefix."photocrati_styles SET ";
		$i = 0;
		while (list($key,$value) = each($_POST)){
			if ($i != 0) { $comma = ", ";} else { $comma = ""; }
				$SQL = $SQL.$comma.$key."='".mysql_real_escape_string($value)."'";
			$i = $i + 1;
		}
	$SQL = $SQL." WHERE option_set = 1";
	
	$wpdb->query($SQL);
					
?>

