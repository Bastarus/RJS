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
    $avatar = $_FILES['file']['name'];

    $types = array('image/gif', 'image/png', 'image/jpeg');
    $size = 5242880;
    $uploaddir = '../../img/user-avatars/';
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);

    if(isset($file)) {
        if (!in_array($_FILES['file']['type'], $types)) {
            die('Запрещённый тип файла. <a href="../pages/news.php">Попробовать другой файл?</a>');
        }
        
        if ($_FILES['file']['size'] > $size) {
            die('Слишком большой размер файла. <a href="../pages/news.php">Попробовать другой файл?</a>');
        }
        
        move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
    } else {
        $avatar = 'user-icon.png';
    }

    $mysqli->query("INSERT INTO `users`(`login`, `email`, `password`, `hash`, `firstName`, `secondName`, `avatar`) VALUES ('$login', '$email', '$password', '', '$firstName', '$secondName', '$avatar')");
    header("Location: ../../index.php");
}
?>