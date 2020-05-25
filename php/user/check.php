<?
require_once 'E:/Projects/RJS/php/connectDB.php';

$login = $_COOKIE['login'];
$sql = "SELECT * FROM `users` WHERE `login` = '$login'";
$result = $mysqli->query($sql);
$user = $result->fetch_assoc();

function checkUser($array) {
    if(count($array) > 0) {
        return true;
    } else {
        return false;
    }
}
function checkAdmin($array) {
    if($array['isAdmin']) {
        return true;
    } else {
        return false;
    }
}
?>