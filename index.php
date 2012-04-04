<?php

$theme   = "default";
$theme_path = 'content/themes/' . $theme . '/';

$request = $_GET['q'];

if (strlen($request) === 0 ){

	$page = 'content/pages/home.php';

} else {

	if (file_exists('content/pages/' . $request . '.php')){
	
		$page = 'content/pages/' . $request . '.php';
		
	} else {
	
		$page = 'content/pages/404.php';
		
	}
	
}

require($theme_path . 'layout.php');
