<?php
    $servername = "localhost";
    $database = "rjs";
    $username = "root";
    $password = "";

    $mysqli = new mysqli($servername, $username, $password, $database);

    $title = $_POST["title"];
    $text = $_POST["text"];
    $img = $_POST["image"];
    $date = date("m.d.y");

    $sql = "INSERT INTO `news`(`title`, `text`, `date`, `img`) VALUES ('$title', '$text', '$date', '$img')";

    $mysqli->query($sql);

    header("Location: news.php");
?>