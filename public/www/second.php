<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_POST['name'];
$email = $_POST['email'];

// Обработка данных

echo "Данные успешно обработаны!" . $email;
}