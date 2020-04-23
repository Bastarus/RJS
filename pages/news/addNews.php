<?php
    $servername = "localhost";
    $database = "rjs";
    $username = "root";
    $password = "";

    $mysqli = new mysqli($servername, $username, $password, $database);

    $title = $_POST["title"];
    $text = $_POST["text"];
    $date = date("d.m.y");
    $file = $_FILES['file']['name'];

    $sql = "INSERT INTO `news`(`title`, `text`, `date`, `file`) VALUES ('$title', '$text', '$date', '$file')";

    $mysqli->query($sql);

    $types = array('image/gif', 'image/png', 'image/jpeg');
    $size = 1024000;
    $uploaddir = 'news-files/';
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);

    if (!in_array($_FILES['picture']['type'], $types)) {
        die('Запрещённый тип файла. <a href="news.php">Попробовать другой файл?</a>');
    }
    
    if ($_FILES['picture']['size'] > $size) {
        die('Слишком большой размер файла. <a href="news.php">Попробовать другой файл?</a>');
    }
    
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);

    header("Location: news.php");
?>