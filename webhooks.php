<?php // callback.php

require "vendor/autoload.php";
$access_token = 'JdRiJ3RVcF44kzQu0Fld6fzGKjYQcgDqFBv5ZjXgTN5FKp+uQLEnrdbCWhIlWLmVzQALhdXTJPlAfMFeZBVyeNZ9pxXSQXfmxyI/VvF4p2dAy0Qm+6m9GXW8oZnibBqs3h6mYDV95oxfo6JMSBVivgdB04t89/1O/w1cDnyilFU=';
$channelSecret = '41691f90a6d744bd054ff91728d4068a';
$idPush = 'Ub9093a0047208db0aaa799bb4ff0fcae'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

echo 'OK';
