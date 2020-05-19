<?php
    require_once 'connectDB.php';

    $id = $_GET['id'];

    $sqlFile = "SELECT * FROM `files` WHERE `id` = $id";
    $getFileName = $mysqli->query($sqlFile);
    $result = $getFileName->fetch_assoc();
    $fileName = $result['name'];

    $sql = "DELETE FROM `files` WHERE `id` = $id";
    
    if (unlink('../pages/disciplines/disciplines-files/'. $fileName)) {
        $mysqli->query($sql);
    }

    header("Location: ../index.php#disciplines");
?>