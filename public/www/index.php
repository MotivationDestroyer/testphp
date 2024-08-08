<?php
$url = 'http://tryphp/www/second.php';
$email = $_POST['email'];
$data = array('name' => 'John', 'email' => $email);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$response = curl_exec($ch);
echo $response;

curl_close($ch);
/*
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) — указывает PHP вернуть ответ от сервера в виде строки. 
По умолчанию функция curl_exec() возвращает false в случае ошибки или успеха,
но установка этого параметра позволяет получить ответ сервера в виде строки и сохранить его в переменной $response.

curl_setopt($ch, CURLOPT_POST, true) — устанавливает метод запроса как POST. Это означает, что данные,
указанные в параметре CURLOPT_POSTFIELDS, будут отправлены на сервер методом POST.

curl_setopt($ch, CURLOPT_POSTFIELDS, $data) — отправляет данные в формате массива $data на указанный URL.
*/