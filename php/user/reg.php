<?
require_once '../connectDB.php';

if(isset($_POST['reg'])) {
    $err = array();

    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login'])) {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }
    if(strlen($_POST['login']) < 3 || strlen($_POST['login']) > 30) {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['password'])) {
        $err[] = "Пароль может состоять только из букв английского алфавита и цифр";
    }
    if(strlen($_POST['password']) < 3 || strlen($_POST['password']) > 30) {
        $err[] = "Пароль должен быть не меньше 3-х символов и не больше 30";
    }

    // $login = $_POST['login'];
    // $sql = "SELECT COUNT(id) FROM `users` WHERE `login` = '$login'";
    // $result = $mysqli->query($sql);

    // if(count(mysqli_fetch_assoc($result)) > 0) {
    //     $err[] = "Пользователь с таким логином уже существует в базе данных";
    //     $err[] = mysqli_fetch_assoc($result)['id'];
    // }

    if(count($err) == 0) {
        $login = $_POST['login'];
        $password = md5(md5(trim($_POST['password'])));
        $email = $_POST['email'];
        $firstName = $_POST['firstName'];
        $secondName = $_POST['secondName'];

        $mysqli->query("INSERT INTO `users`(`login`, `email`, `password`, `hash`) VALUES ('$login', '$email', '$password', '')");
        header("Location: ../../index.php");
    } else {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";

        foreach($err AS $error) {
            print $error."<br>";
        }
    }
}
?>