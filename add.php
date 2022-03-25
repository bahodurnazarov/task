<?php

//Переменные
$title = $_POST['title'];
$price = $_POST['price'];

//Подключение к базе данных
require 'db.php';

//Подготовка к загрузке в базу данных
$sql = 'INSERT INTO list(title) VALUES(:title)';

$query = $pdo->prepare($sql);

$query->execute(['title' => $title]);

//Перемещение в index.php после завершение скрипта
header('Location: index.php');

?>