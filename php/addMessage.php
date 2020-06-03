<?php
    require_once 'user/check.php';
    if(isset($_POST['add'])) {
        $message = $_POST['message'];
        $date = date("d.m.y");
        $email = $user['email'];
        $fName = $user['firstName'];
        $sName = $user['secondName'];
        $author = $fName . ' ' . $sName;
        $theme = $_POST['theme'];

        $sqlAddMessage = "INSERT INTO `forummessages`(`date`, `email`, `theme`, `text`, `author`) VALUES ('$date', '$email', '$theme', '$message', '$author')";
        $mysqli->query($sqlAddMessage);
    }
    header("Location: ".$_SERVER["HTTP_REFERER"]);
?>