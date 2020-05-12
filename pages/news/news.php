<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = 'Новости';
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
                    Новости
                </h1>
                <a href="" class="btn">
                    Вперед
                </a>
            </div>
            <div class="header-main__img">
                <img src="../../img/header-img/news-img.png" alt="Новости">
            </div>
        </div>
    </header>
    <main>
        <section class="section section_black">
            <div class="section__main">
                <div class="news">
                <?php
                    require_once 'E:/Projects/RJS/php/connectDB.php';

                    $result = $mysqli->query("SELECT * FROM `news` WHERE 1 ORDER BY `id` DESC");
                    while ($row = $result->fetch_assoc()) {
                        echo '<a href="newsItem.php?id='. $row['id'] .'"><div class="news__item" style="background-image: url(news-files/'. $row['file'] .')">
                                <p class="news__date section__text">
                                    '. $row['date'] .'
                                </p>
                                <div class="news__line"></div>
                                <h3 class="news__title section__subtitle">
                                    '. $row['title'] .'
                                </h3>
                                <p class="news__text_">
                                    '. mb_strimwidth($row['text'], 0, 100) . '...' . '
                                </p>
                            </div></a>';
                    }
                ?>
                </div>
                <div class="news__buttons">
                    <div class="btn" id="openForm">
                        Добавить новость
                    </div>
                    <a href="" class="btn">
                        Загрузить следующие
                    </a>
                </div>
                <div class="form-wrapper" id="form-wrapper">
                    <form enctype="multipart/form-data" name="addNews" method="post" action="../../php/addNews.php" class="form">
                        <label for="title">Заголовок</label>
                        <input type="text" name="title" id="title">
                        <label for="text">Текст новости</label>
                        <textarea name="text" id="text" cols="10" rows="1"></textarea>
                        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                        <input type="file" name="file" id="file">
                        <input name="add" type="submit" id="add" value="Добавить">
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