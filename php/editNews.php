<?php
    require_once 'connectDB.php';

    $id = $_GET['id'];

    $editTitle = $_POST["editTitle"];
    $editText = $_POST["editText"];

    $sql = "UPDATE `news` SET `title`= '$editTitle',`text`= '$editText' WHERE `id` = $id";

    $mysqli->query($sql);

    header("Location: ../pages/news/news.php");
?>