<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        require_once 'E:/Projects/RJS/php/connectDB.php';

        $id = $_GET['id'];

        $sql = "SELECT `name` FROM `disciplines` WHERE `id` = $id";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();

        $title = $row['name'];
        require_once 'E:/Projects/RJS/templates/head.php';
    ?>
</head>
<body>
    <header class="header">
        <?php
            require_once 'E:/Projects/RJS/templates/header-top.php';
        ?>
        <div class="header-main">
            <div class="header-main__info">
                <h1 class="header-main__title">
                    <?=$title?>
                </h1>
                <a href="" class="btn">
                    Вперед
                </a>
            </div>
        </div>
    </header>
    <main>
        <section class="section section_black">
            <div class="section__main">
                <div class="files__buttons">
                    <div class="btn" id="openForm">
                        Загрузить файл
                    </div>
                    <div class="form-wrapper" id="form-wrapper">
                        <form enctype="multipart/form-data" name="addFile" method="post" action="../../php/addFile.php" class="form">
                            <label for="name">Имя файла</label>
                            <input type="text" name="name" id="name">
                            <label for="discipline-select">Дисциплина</label>
                            <select name="discipline-select" id="discipline-select">
                                <?php
                                    require_once "../../php/connectDB.php";

                                    $sql = "SELECT * FROM `disciplines`";
                                    $result = $mysqli->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="'. $row['name'] .'">'. $row['name'] .'</option>';
                                    }
                                ?>
                            </select>
                            <input type="file" name="file" id="file">
                            <input type="hidden" name="id" value="<?=$id?>" id="id">
                            <input name="add" type="submit" id="add" value="Загрузить">
                        </form>
                        <div class="news-btn_close" id="news-btn_close">
                            <img src="../../img/icons/close.png" alt="Закрыть форму">
                        </div>
                    </div>
                </div>
                <div class="files-wrapper">
                    <?php
                        $sql = "SELECT * FROM `files` WHERE `discipline` = '$title'";
                        $result = $mysqli->query($sql);

                        while ($row = $result->fetch_assoc()) {
                            echo '<a class="files-item" href="discipline-files/'. $row['name'] .'">
                                    <div class="files__icon">
                                        <img src="../../img/icons/download-icon.png" alt="Иконка загрузки">
                                    </div>
                                    <div class="files-info">
                                        <h2 class="files__title">
                                            '. $row['name'] .'
                                        </h2>
                                        <p class="files__text">
                                            '. $title .'
                                        </p>
                                        <p class="files__date">
                                            '. $row['date'] .'
                                        </p>
                                    </div>
                                </a>';
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once 'E:\Projects\RJS\templates/footer.php';
    ?>
</body>
</html>