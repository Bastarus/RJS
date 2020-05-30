<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require 'PHPMailer.php';
    
    $mail = new PHPMailer();
    $mail->setFrom('test@domain.ru', 'Иван Иванов'); // от кого (email и имя)
    $mail->addAddress('bastarus0@gmail.com', 'Вася Петров');  // кому (email и имя)
    $mail->Subject = 'Тест';                         // тема письма
    // html текст письма
    $mail->msgHTML("<html><body>
                    <h1>Здравствуйте!</h1>
                    <p>Это тестовое письмо.</p>
                    </html></body>");

    if ($mail->send()) {
    echo 'Письмо отправлено!';
    } else {
    echo 'Ошибка: ' . $mail->ErrorInfo;
    }  
?>