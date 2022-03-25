<?php

//Подключаем базу данных из файла db.php
require 'db.php';

//Переменная
$id = $_GET['id'];

//Удаляем элемент из таблицы list с определенным id
$sql = 'DELETE FROM `list` WHERE `id` = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

//Перемещаемся в index.php
header('Location: index.php');

?>