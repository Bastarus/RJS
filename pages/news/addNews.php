<?php
    $servername = "localhost";
    $database = "rjs";
    $username = "root";
    $password = "";

    $mysqli = new mysqli($servername, $username, $password, $database);

    $title = $_POST["title"];
    $text = $_POST["text"];
    $date = date("d.m.y");

    $sql = "INSERT INTO `news`(`title`, `text`, `date`) VALUES ('$title', '$text', '$date')";

    $mysqli->query($sql);

    header("Location: news.php");
?>