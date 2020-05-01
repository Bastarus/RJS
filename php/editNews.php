<?php
    $servername = "localhost";
    $database = "rjs";
    $username = "root";
    $password = "";

    $id = $_GET['id'];

    $mysqli = new mysqli($servername, $username, $password, $database);

    $editTitle = $_POST["editTitle"];
    $editText = $_POST["editText"];

    $sql = "UPDATE `news` SET `title`= '$editTitle',`text`= '$editText' WHERE `id` = $id";

    $mysqli->query($sql);

    header("Location: ../pages/news/news.php");
?>