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
    <style>
        .header {
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("news-files/<?php echo $row['file'] ?>");
            background-position: center;
            background-size: cover;
        }
    </style>
    <header class="header header_big">
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
                    <a class="btn" id="removeNews" href="../../php/removeNews.php?id=<?php echo $row['id']?>">
                        Удалить новость
                    </a>
                </div>
                <div class="form-wrapper" id="form-wrapper">
                    <form name="editNews" method="post" action="../../php/editNews.php?id=<?php echo $row['id']?>" class="news-form">
                        <label for="title">Заголовок</label>
                        <input type="text" name="editTitle" id="title" value="<?php echo $row['title']?>">
                        <label for="text">Текст новости</label>
                        <textarea name="editText" id="editText" cols="10" rows="1"><?php echo $row['text']?></textarea>
                        <input name="edit" type="submit" id="add" value="Обновить">
                    </form>
                    <div class="news-btn_close" id="news-btn_close">
                        <img src="../../img/icons/close.png" alt="Закрыть форму">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once 'E:\Projects\RJS\templates/footer.php';
    ?>
</body>
</html>