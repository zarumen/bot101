<?php
$access_token = 'lhGYl+seZqcTwUeUfYP5I5RTWzA2fjrRPSRTBVLm0UPdr+1ElD5zyziRDYoTQ5jHRJzamA8fK83rtoXC2iA0rP7dZif6yrxQxrklSCwHxFLgtoibFyKJZv/AFsSdaaD520o3G+zAfC1YGRzCFE5PhQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
