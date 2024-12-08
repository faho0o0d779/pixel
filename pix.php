<?php
// Get visitor data
$ip = $_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$time = date('Y-m-d H:i:s');

// Log to file
$file = 'log.txt';
$log = "$time | $ip | $agent\n";
file_put_contents($file, $log, FILE_APPEND);

// Serve the image
header('Content-Type: image/png');
readfile('1x1.png');
?>
