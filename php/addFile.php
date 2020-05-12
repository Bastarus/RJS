<?php
    require_once 'E:/Projects/RJS/php/connectDB.php';

    $discipline = $_POST["discipline-select"];
    $date = date("d.m.y");

    $type = explode('.', $_FILES['file']['name']); 
    $type = end($type);

    if ($_POST['name']) {
        $name = $_POST['name'] . '.' . $type;
    } else {
        $name = $_FILES['file']['name'];
    }

    $id = $_POST['id'];

    $sql = "INSERT INTO `files`(`name`, `discipline`, `date`) VALUES ('$name', '$discipline', '$date')";

    $types = array('doc', 'docx', 'ppt', 'pptx', 'pdf', 'jpeg', 'jpg', 'png', 'gif', 'xls', 'xlsx', '');
    $size = 20971520;
    $uploaddir = '../pages/disciplines/disciplines-files/';
    $uploadfile = $uploaddir . $name;

    if (!in_array($type, $types)) {
        die('Запрещённый тип файла. <a href="../pages/disciplines/discipline.php?id='. $id .'">Попробовать другой файл?</a>');
    }
    
    if ($_FILES['file']['size'] > $size) {
        die('Слишком большой размер файла. <a href="../pages/disciplines/discipline.php?id='. $id .'">Попробовать другой файл?</a>');
    }
    
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        $mysqli->query($sql);
    }
    
    header("Location: ../pages/disciplines/discipline.php?id=$id");
?>