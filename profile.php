<?php


$access_token = 'MBNoWbQjzLe1EInL2DTdqihV8nLCAdAseW4fI4ZaGB5HAQkwfI8TWFKH2TmGDcV3ba46f3eQ8tMaHU0O72SupS9Vhv9XzMBav+QPedE1aGjDi4vLxFgpYI0pXfLn83tJ/TzdoILLpqSUI6nmQnsIlQdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

