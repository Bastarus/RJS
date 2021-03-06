<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        require_once '../php/connectDB.php';

        $id = $_GET['id'];

        $sql = "SELECT `name` FROM `disciplines` WHERE `id` = $id";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();

        $title = $row['name'];
        require_once '../templates/head.php';
    ?>
</head>
<body>
    <?php
        require_once '../php/user/check.php';
        if(checkAdmin($user)) {
            echo '
                
            ';
        }
    ?>
    <div class="modal" id="modal">
        <div class="modal-content">
            <div class="form-wrapper" id="form-wrapper">
                <form enctype="multipart/form-data" name="addFile" method="post" action="../php/addFile.php" class="form">
                    <label for="discipline-select">Дисциплина</label>
                    <select name="discipline-select" id="discipline-select" required>
                        <?php
                            require_once "../php/connectDB.php";

                            $sql = "SELECT * FROM `disciplines`";
                            $result = $mysqli->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value="'. $row['name'] .'">'. $row['name'] .'</option>';
                            }
                        ?>
                    </select>
                    <label for="category">Категория</label>
                    <select name="category" id="category">
                        <?php
                            $sql = "SELECT * FROM `categories`";
                            $result = $mysqli->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value="'. $row['category'] .'">'. $row['category'] .'</option>';
                            }
                        ?>
                    </select>
                    <input type="file" name="file" id="file" required multiple>
                    <input type="hidden" name="id" value="<?=$id?>" id="id">
                    <input name="add" type="submit" class="submit" id="add" value="Загрузить">
                </form>
                <div class="closeForm" id="closeForm">
                    <img src="../img/icons/close.png" alt="Закрыть форму">
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <?php
            require_once '../templates/header-top.php';
        ?>
    </header>
    <main>
        <section class="section section_black" id="firstSection" id="firstSection">
            <div class="section__main">
                <h1 class="page__title discipline__title">
                    <?=$title?>
                </h1>
                <?php
                    if(checkAdmin($user)) {
                        echo '
                        <div class="files__buttons">
                            <div class="btn" id="openForm">
                                Загрузить файл
                            </div>
                        </div>
                        ';
                    }
                ?>
                <div class="files">
                    <?php
                        if(checkUser($user)) {
                            $sql = "SELECT * FROM `categories`";
                            $result = $mysqli->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $category = $row['category'];
                                echo '<div class="files-category">
                                    <div class="openFilesList">
                                        <h2 class="section__title">'. $row['category'] .'</h2>
                                        <div><img src="../img/icons/down-arrow.png"></div>
                                    </div>    
                                    <div class="files-wrapper">';    
                                $sqlFileGet = "SELECT * FROM `files` WHERE `category` = '$category' AND `discipline` = '$title'";
                                $files = $mysqli->query($sqlFileGet);
        
                                while ($rowFiles = $files->fetch_assoc()) {
                                    echo '<div class="files-block">
                                            <div class="files-info">
                                                <a href="https://docs.google.com/viewer?url=disciplines-files/'. $rowFiles['name'] .'" title="'. $rowFiles['name'] .'">
                                                    <div class="files-item">
                                                        <div class="files__icon">
                                                            <img src="../../img/icons/download-icon.png" alt="Иконка загрузки">
                                                        </div>
                                                        <div class="files-text">
                                                            <h2 class="files__title">
                                                                '. $rowFiles['name'] .'
                                                            </h2>
                                                            <p class="files__text">
                                                                '. $rowFiles['discipline'] .'
                                                            </p>
                                                            <p class="files__date">
                                                                '. $rowFiles['date'] .'
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <a class="delete-file" href="/php/removeFile.php?id='. $rowFiles['id']. '">
                                                <p>Удалить</p>
                                            </a>
                                        </div>';
                                }  
                                
                                echo '</div></div>';
                            }
                        } else {
                            echo 'Для просмотра и скачивания файлов необходимо <a href="user.php"><span class="yellow">авторизироваться</span></a>';
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once '../templates/footer.php';
    ?>
</body>
</html>