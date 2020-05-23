<?php
    require_once 'connectDB.php';

    $discipline = $_POST["discipline-select"];
    $date = date("d.m.y");
    $category = $_POST['category'];

    $type = explode('.', $_FILES['file']['name']); 
    $type = end($type);

    if ($_POST['name']) {
        $name = $_POST['name'] . '.' . $type;
    } else {
        $name = $_FILES['file']['name'];
    }

    $id = $_POST['id'];

    $sql = "INSERT INTO `files`(`name`, `discipline`, `date`, `category`) VALUES ('$name', '$discipline', '$date', '$category')";

    $types = array('doc', 'docx', 'ppt', 'pptx', 'pdf', 'jpeg', 'jpg', 'png', 'gif', 'xls', 'xlsx', '');
    $size = 20971520;
    $uploaddir = '../pages/disciplines-files/';
    $uploadfile = $uploaddir . $name;

    if (!in_array($type, $types)) {
        die('Запрещённый тип файла. <a href="../pages/discipline.php?id='. $id .'">Попробовать другой файл?</a>');
    }
    
    if ($_FILES['file']['size'] > $size) {
        die('Слишком большой размер файла. <a href="../pages/discipline.php?id='. $id .'">Попробовать другой файл?</a>');
    }
    
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        $mysqli->query($sql);
    }
    
    header("Location: ../pages/discipline.php?id=$id");
?>