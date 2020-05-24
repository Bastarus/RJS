<?
require_once 'E:/Projects/RJS/php/connectDB.php';

$login = $_COOKIE['login'];
$sql = "SELECT `hash` FROM `users` WHERE `login` = '$login'";
$result = $mysqli->query($sql);
$hash = $result->fetch_assoc();
?>