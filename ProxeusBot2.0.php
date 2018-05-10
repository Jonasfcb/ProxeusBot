<?php


$botToken = "588885236:AAGDpoKg51y_cYNIKFl7rcJKqkEOB9rTFTw";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);


$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];


switch($message) {
    
    case "/price":
        sendMessage($chatId, "icoprice");
        break;
    case "/exchange":
        sendMessage($chatId, "hi there!");
        break;
    default:
        sendMessage($chatId, "default");
        
}

function sendMessage ($chatId, $message) {
    $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
    file_get_contents($url);
    
}





?>