<?php
    require_once 'connectDB.php';

    $title = $_POST["title"];
    $text = $_POST["text"];
    $date = date("d.m.y");
    $file = $_FILES['file']['name'];
    $type = $_FILES['file']['type'];

    $sql = "INSERT INTO `news`(`title`, `text`, `date`, `file`, `type`) VALUES ('$title', '$text', '$date', '$file', '$type')";

    $types = array('image/gif', 'image/png', 'image/jpeg', '');
    $size = 5242880;
    $uploaddir = '../pages/news-files/';
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);

    if (!in_array($type, $types)) {
        die('Запрещённый тип файла. <a href="../pages/news.php">Попробовать другой файл?</a>');
    }
    
    if ($_FILES['file']['size'] > $size) {
        die('Слишком большой размер файла. <a href="../pages/news.php">Попробовать другой файл?</a>');
    }
    
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
    $mysqli->query($sql);

    header("Location: ".$_SERVER["HTTP_REFERER"]);
?>