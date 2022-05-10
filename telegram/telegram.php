<?php

// Токен
$token = '5289466944:AAGOTCMnGA-CBSs_W3SY-3KAeqv2gnpa3Wk';

// ID чата
$chat_id = '588083847';

$name = strip_tags(urlencode($_POST['name']));
$phonenumber = strip_tags(urlencode($_POST['phonenumber']));
$datetime = strip_tags(urlencode($_POST['dateTime']));

$arr = array(
    'Имя пользователя: ' => $name,
    'Номер телефона: ' => $phonenumber,
    'Дата и время: ' => $datetime
);

foreach ($arr as $key => $value) {
    $txt .= "<b>".$key."</b>".$value."%0A";
};

$textSendStatus = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r"); 
$resData = array();
$resData["message"] = "123"; 
echo json_encode($resData);