<?php

# Принимаем запрос
$data = json_decode(file_get_contents('php://input'), TRUE);

//https://api.telegram.org/bot*TOKEN*/setwebhook?url=*URL*

# Переменные
$token = '1681935656:AAGG7bpYJFly7eMWpGnondSOrguLtT27mLo';

# Обрабатываем команды
$message = $data['message']['text'];

# Формируем массив для отправления в телеграм
$params = [
    'chat_id' => $data['message']['chat']['id'],
    'text'    => $message
];

# Отправляем запрос в телеграм
file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($params));
?>
