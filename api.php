<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');


$recipients = 'naimathbaig78@gmail.com';

$headers['From']    = 'richard@example.com';
$headers['To']      = 'joe@example.com';
$headers['Subject'] = 'Test message';

$body = 'Test message';

$mail_object->send($recipients, $headers, $body);
?>