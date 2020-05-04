<?php
    require_once 'E:/Projects/RJS/php/connectDB.php';

    $id = $_GET['id'];

    $sqlFile = "SELECT * FROM `news` WHERE `id` = $id";
    $getFileName = $mysqli->query($sqlFile);
    $result = $getFileName->fetch_assoc();
    $fileName = $result['file'];
    
    unlink('../pages/news/news-files/'. $fileName .'');

    $sql = "DELETE FROM `news` WHERE `id` = $id";

    $mysqli->query($sql);

    header("Location: ../pages/news/news.php");
?>