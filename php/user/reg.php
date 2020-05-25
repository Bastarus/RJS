<?
require_once '../connectDB.php';

if(isset($_POST['reg'])) {
    // $login = $_POST['login'];
    // $sql = "SELECT COUNT(id) FROM `users` WHERE `login` = '$login'";
    // $result = $mysqli->query($sql);

    // if(count(mysqli_fetch_assoc($result)) > 0) {
    //     $err[] = "Пользователь с таким логином уже существует в базе данных";
    //     $err[] = mysqli_fetch_assoc($result)['id'];
    // }

    $login = $_POST['login'];
    $password = md5(md5(trim($_POST['password'])));
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $secondName = $_POST['secondName'];

    $mysqli->query("INSERT INTO `users`(`login`, `email`, `password`, `hash`) VALUES ('$login', '$email', '$password', '')");
    header("Location: ../../index.php");
}
?>