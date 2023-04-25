<?php
$log_file = 'tracking.log';
$ip_address = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$referrer = $_SERVER['HTTP_REFERER'];

$log_data = date('Y-m-d H:i:s') . "\t" . $ip_address . "\t" . $user_agent . "\t" . $referrer . "\n";
file_put_contents($log_file, $log_data, FILE_APPEND);
?>
