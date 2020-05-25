<?php
    require_once 'connectDB.php';

    $login = $_POST['login'];
    $date = date("d.m.y");
    $comment = $_POST["comment"];
    $page_id = $_POST["page_id"];
    $comment = htmlspecialchars($comment);
    $mysqli->query("INSERT INTO `comments`(`page_id`, `login`, `text`, `date`) VALUES ('$page_id', '$login', '$comment', '$date')");

    header("Location: ".$_SERVER["HTTP_REFERER"]);
?>