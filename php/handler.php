<?php 

if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	header('Location: /');
	exit;
}

echo $_SERVER['REQUEST_URI'];

?>