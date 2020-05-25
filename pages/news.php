<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = 'Новости';
        require_once '../templates/head.php';
    ?>
</head>
<body>
    <?php
        require_once '../php/user/check.php';

        if(checkAdmin($user)) {
            echo '
            <div class="modal" id="modal">
                <div class="modal-content">
                    <div class="form-wrapper" id="form-wrapper">
                        <form enctype="multipart/form-data" name="addNews" method="post" action="../../php/addNews.php" class="form">
                            <label for="title">Заголовок</label>
                            <input type="text" name="title" id="title" required>
                            <label for="text">Текст новости</label>
                            <textarea name="text" id="text" cols="10" rows="1" required></textarea>
                            <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                            <input type="file" name="file" id="file">
                            <input name="add" type="submit" id="add" value="Добавить">
                        </form>
                        <div class="closeForm" id="closeForm">
                            <img src="../../img/icons/close.png" alt="Закрыть форму">
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
    ?>
    <header class="header">
        <?php
            require_once '../templates/header-top.php';
        ?>
        <div class="header-main">
            <div class="header-main__info">
                <h1 class="header-main__title">
                    Новости
                </h1>
                <button class="btn header-btn">
                    Вперед
                </button>
            </div>
            <div class="header-main__img">
                <img src="../../img/header-img/news-img.png" alt="Новости">
            </div>
        </div>
    </header>
    <main>
        <section class="section section_black" id="firstSection">
            <div class="section__main">
                <div class="news">
                <?php
                    require_once '../php/connectDB.php';

                    $result = $mysqli->query("SELECT * FROM `news` WHERE 1 ORDER BY `id` DESC");
                    while ($row = $result->fetch_assoc()) {
                        echo '<a href="newsItem.php?id='. $row['id'] .'">
                                <div class="news__item" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(news-files/'. $row['file'] .'); background-position: center; background-size: cover;">
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
                                </div>
                            </a>';
                    }
                ?>
                </div>
                <?php
                    if(checkAdmin($user)) {
                        echo '
                        <div class="news__buttons">
                            <div class="btn" id="openForm">
                                Добавить новость
                            </div>
                        </div>
                        ';
                    }
                ?>
            </div>
        </section>
    </main>
    <?php
        require_once '../templates/footer.php';
    ?>
</body>
</html>