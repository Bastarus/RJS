<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $servername = "localhost";
        $database = "rjs";
        $username = "root";
        $password = "";

        $id = $_GET['id'];

        $mysqli = new mysqli($servername, $username, $password, $database);

        $result = $mysqli->query("SELECT * FROM `news` WHERE `id` = $id");
        $row = $result->fetch_assoc();

        $title = $row['title'];
        require_once '../../templates/head.php';
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
                   <?php echo $row['title']; ?>
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
                <div class="section__info">
                    <div class="section__text newsItem__text">
                        <p>
                            <?php
                                echo $row['text'];
                            ?>
                        </p>
                    </div>
                </div>
                <div class="news__buttons">
                    <div class="btn" id="news-btn">
                        Редактировать
                    </div>
                    <a href="" class="btn">
                        Загрузить фото
                    </a>
                </div>
                <div class="form-wrapper" id="form-wrapper">
                    <form name="form1" method="post" action="editNews.php" class="news-form">
                        <label for="title">Заголовок</label>
                        <input type="text" name="title" id="title">
                        <label for="text">Текст новости</label>
                        <textarea name="text" id="text" cols="10" rows="1"></textarea>
                        <input name="add" type="submit" id="add" value="Обновить">
                    </form>
                    <div class="news-btn_close" id="news-btn_close">
                        <img src="../../img/icons/close.png" alt="Закрыть форму">
                    </div>
                </div>
                <div class="form-wrapper" id="form-wrapper">
                    <form enctype="multipart/form-data" action="__URL__" method="POST">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10000">
                        Отправить этот файл: <input name="userfile" type="file">
                        <input type="submit" value="Отправить файл" />
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once 'E:\Projects\RJS\templates/footer.php';
    ?>
</body>
</html>