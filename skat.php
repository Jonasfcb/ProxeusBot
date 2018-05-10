<?php


$botToken = "588885236:AAGDpoKg51y_cYNIKFl7rcJKqkEOB9rTFTw";
$website = "https://api.telegram.org/bot".$botToken;

$update =file_get_contents("php://input");

$updateArray =json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");

?>