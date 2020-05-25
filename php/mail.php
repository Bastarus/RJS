<?php
    function sendMail($to, $from, $title, $message) {
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= 'From: '. $from .'\r\n'; 
        $headers .= 'Reply-To: '. $from .'\r\n';

        $mail = mail($to, $title, $message, $headers);

        return $mail;
    }
    $to = 'bastarus0@gmail.com';
    $from = $_POST['email'];
    $title['title'];
    $message = $_POST['message'];

    if (sendMail($to, $from, $title, $message)) {
        header("Location: ../pages/contacts.php");
    } else {
        echo 'Произошла ошибка, письмо не отправлено! /n
              <a href="../pages/contacts.php">Попробовать снова</a>';
    }
?>