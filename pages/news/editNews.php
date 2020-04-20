<?php
    $servername = "localhost";
    $database = "rjs";
    $username = "root";
    $password = "";

    $id = $_GET['id'];

    $mysqli = new mysqli($servername, $username, $password, $database);

    $title = $_POST["title"];
    $text = $_POST["text"];

    $sql = "UPDATE `news` SET `title`= '$title',`text`= '$text' WHERE `id` = $id";

    $mysqli->query($sql);

    header("Location: news.php");
?>