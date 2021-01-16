<?php
$access_token = 'l0I1pWrpDxel0K9r/I6J9QlKpJehdBgWT5Yb2DMWNDw7v4qMsRtSuR3Ev40Fb7UMJODxl3KHSkmRMaE9xKDw1Q2ZoUk16vOu1Ogp5nFKqUCzX25u3rLt/HvFJV1rsAZGxzSIbB8e3op91+FDObaiegdB04t89/1O/w1cDnyilFU=;


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
