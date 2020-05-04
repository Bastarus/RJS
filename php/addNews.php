<?php
    require_once 'E:/Projects/RJS/php/connectDB.php';

    $title = $_POST["title"];
    $text = $_POST["text"];
    $date = date("d.m.y");
    $file = $_FILES['file']['name'];

    $sql = "INSERT INTO `news`(`title`, `text`, `date`, `file`) VALUES ('$title', '$text', '$date', '$file')";

    $types = array('image/gif', 'image/png', 'image/jpeg');
    $size = 5242880;
    $uploaddir = '../pages/news/news-files/';
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);

    if (!in_array($_FILES['file']['type'], $types)) {
        die('Запрещённый тип файла. <a href="../pages/news/news.php">Попробовать другой файл?</a>');
    }
    
    if ($_FILES['file']['size'] > $size) {
        die('Слишком большой размер файла. <a href="../pages/news/news.php">Попробовать другой файл?</a>');
    }
    
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
    $mysqli->query($sql);

    header("Location: ../pages/news/news.php");
?>