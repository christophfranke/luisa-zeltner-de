<?php
	
	$nggallery = dirname(dirname(dirname(__FILE__))).'/nggallery.css';
	$fileData = $_POST['nggallery'];
	$css = fopen($nggallery, 'w') or die("Cannot write nggallery.css. Please make sure the file has proper permissions.");
	fwrite($css, $fileData);
					
?>

