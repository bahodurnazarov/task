<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="wrapper">
    <form action="add.php" method="POST">
        <input type="text" name="title" required>
        <input type="number" name="price" required>
        <input type="submit" value="Add">
    </form>
    <br>

    <ul>
        <?php

        //Подключаем базу данных из файла db.php
        require 'db.php';

        //Берем все элементы из базы данных, из таблицы list
        $query = $pdo->query('SELECT * FROM `list` ORDER BY `id` DESC');

        //Цикл который выводит все элементы, значения
        while($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<div><li>'. $row->title .' <a href="delete.php?id='.$row->id.'" id="card-link-click">X</a></li>' . ' </div>';

        }
        ?>
    </ul>
</div>


<?php
include('includes/footer.php');
?>