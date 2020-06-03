<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = 'Главная';
        require_once 'templates/head.php';
    ?>
    <link rel="stylesheet" href="bvi.css">
</head>
<body>
    <header class="header header_big">
        <?php
            require_once 'templates/header-top.php';
        ?>
        <div class="header-main">
            <div class="header-main__info">
                <h1 class="header-main__title">
                    Добро пожаловать!<br>
                    Я Рогачева Жанна Сергеевна - преподаватель экономических дисциплин в ВИТИ НИЯУ МИФИ.
                </h1>
                <a href="pages/about.php" class="btn btn_white">
                    Подробнее
                </a>
            </div>
        </div>
    </header>
    <main>
        <section class="section">
            <a href="#disciplines"></a>
            <div class="section__main">
                <div class="section__info">
                    <div class="section__title-block">
                        <h2 class="section__title">
                            Мои дисциплины
                        </h2>
                    </div>
                    <div class="section__text">
                        <p>
                            Кликните по карточке необходимой дисциплины для просмотра и скачивания файлов.
                        </p>
                    </div>
                </div>
                <div class="disciplines">
                    <div class="disciplines__cards">
                        <?php
                            $resultDisc = $mysqli->query("SELECT * FROM `disciplines`");
                            while($discipline = $resultDisc->fetch_assoc()) {
                                echo '
                                <a href="pages/discipline.php?id='.$discipline['id'].'" class="disciplines__card" style="background-image: url(img/icons/disp/'.$discipline['image'].')">
                                    <div>
                                        <h3 class="disciplines__title">
                                            '.$discipline['name'].'
                                        </h3>
                                    </div>
                                </a>
                                ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section_black">
            <div class="section__main">
                <div class="section__title-block">
                    <h2 class="section__title">
                        Последние новости
                    </h2>
                </div>
                <div class="news">
                    <?php
                        $result = $mysqli->query("SELECT * FROM `news` WHERE 1 ORDER BY `id` DESC LIMIT 3");
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="news-item">
                                    <div class="news__img" style="background-image: url(pages/news-files/'.$row['file'].')">
                                    </div>
                                    <div class="news__info">
                                        <div class="news__date">
                                            <div><img src="img/icons/calendar.png"></div>
                                            <p>'.$row['date'].'</p>
                                        </div>
                                        <h3 class="news__title">
                                            '.$row['title'].'
                                        </h3>
                                        <p class="news__text">
                                            '.substr($row['text'], 0, 30).'...
                                        </p>
                                        <div class="btn-wrapper">
                                            <a href="pages/newsItem.php?id='.$row['id'].'" class="btn">Читать далее</a>
                                        </div>
                                    </div>
                                </div>';
                        }
                    ?>
                </div>
                <div class="btn-wrapper">
                    <a href="pages/news.php" class="btn">Смотреть все новости</a>
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once 'templates/footer.php';
    ?>
</body>
</html>