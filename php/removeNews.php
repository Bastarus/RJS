<?php
    $servername = "localhost";
    $database = "rjs";
    $username = "root";
    $password = "";

    $id = $_GET['id'];

    $mysqli = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM `news` WHERE `id` = $id";

    $mysqli->query($sql);

    header("Location: ../pages/news/news.php");
?>