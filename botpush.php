<?php



require "vendor/autoload.php";

$access_token = 'MBNoWbQjzLe1EInL2DTdqihV8nLCAdAseW4fI4ZaGB5HAQkwfI8TWFKH2TmGDcV3ba46f3eQ8tMaHU0O72SupS9Vhv9XzMBav+QPedE1aGjDi4vLxFgpYI0pXfLn83tJ/TzdoILLpqSUI6nmQnsIlQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U0f23ff85a4c279297122f8e601e36bad';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







