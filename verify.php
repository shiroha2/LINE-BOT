<?php
$access_token = '/mipvEmv6xQI4Lbq6mlpnzkWAoHhQ1Pz0oJbAuEMHvVERFIR9hoHnT9nB1s0kFGSGiFuFnB4arklqboD6RwaaGNXecEUFxgukTMIN5S6NU7Pg5QESAhkJjqM5R/2ir98qWdaVkA6tBAW07FdXcPBmAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
