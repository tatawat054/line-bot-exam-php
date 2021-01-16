<?php



require "vendor/autoload.php";

$access_token = 'l0I1pWrpDxel0K9r/I6J9QlKpJehdBgWT5Yb2DMWNDw7v4qMsRtSuR3Ev40Fb7UMJODxl3KHSkmRMaE9xKDw1Q2ZoUk16vOu1Ogp5nFKqUCzX25u3rLt/HvFJV1rsAZGxzSIbB8e3op91+FDObaiegdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







