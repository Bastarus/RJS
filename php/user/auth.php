<?
require_once '../connectDB.php';

function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;  

    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];  
    }

    return $code;
}

if(isset($_POST['auth'])) {
    $login = $_POST['login'];
    $query = $mysqli->query("SELECT `id`, `password` FROM `users` WHERE `login` = '$login' LIMIT 1");
    $user = $query->fetch_assoc();

    if($user['password'] === md5(md5($_POST['password']))) {
        $hash = md5(generateCode(10));   

        setcookie("login", $login, time()+60*60*24*30, '/');
        setcookie("hash", $hash, time()+60*60*24*30, '/');

        $id = $user['id'];
        $mysqli->query("UPDATE `users` SET `hash` = '$hash' WHERE `id` = '$id'");

        header("Location: ../../index.php");
    }
    else {
        print "Вы ввели неправильный логин/пароль";
    }
}

?>