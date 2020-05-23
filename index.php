<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = 'Главная';
        require_once 'templates/head.php';
    ?>
</head>
<body>
    <header class="header header_big">
        <?php
            require_once 'templates/header-top.php';
        ?>
        <div class="header-main">
            <div class="header-main__info">
                <h1 class="header-main__title">
                    Esse ipsum in sunt 
                    ex ipsum pariatur et.
                </h1>
                <p class="header-main__text">
                    Dolore est consectetur exercitation exercitation esse dolore eiusmod anim anim proident cillum in id. 
                    Elit reprehenderit aliquip deserunt eu aliquip.
                </p>
                <button href="" class="btn header-btn">
                    Вперед
                </button>
            </div>
            <div class="header-main__img">
                <img src="img/header-img/header__img.png" alt="Фото">
            </div>
        </div>
    </header>
    <main>
        <section class="section section_bg-lines section_withBB" id="firstSection">
            <div class="section__main section__main_row">
                <div class="section__img desktop">
                    <img src="img/section1__img.png" alt="Фото">
                </div>
                <div class="black-block">
                    <div class="section__info">
                        <div class="section__title-block">
                            <h3 class="section__subtitle">
                                Обо мне
                            </h3>
                            <h2 class="section__title">
                                Рогачева Жанна
                            </h2>
                            <div class="section__text">
                                <p>
                                    Преподаватель
                                </p>
                            </div>
                        </div>
                        <div class="section__text">
                            <p>
                                Voluptate proident ex velit ut duis tempor occaecat sit voluptate incididunt ullamco 
                                dolor. Excepteur nostrud eu cupidatat cillum nisi nisi do duis laborum labore 
                                veniam deserunt deserunt dolor. Duis ullamco nisi incididunt sunt consectetur elit 
                                tempor proident sunt. Deserunt fugiat occaecat ea ipsum consequat. 
                                Enim enim tempor cillum ea nisi est tempor adipisicing ut minim elit et ullamco velit. 
                                Minim duis ex amet aliqua aute ea velit veniam cupidatat.
                            </p>
                        </div>
                        <a href="pages/about.php" class="btn">
                            Подробнее
                        </a>
                    </div>
                </div>
            </div>
        </section>
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
                            Наведите курсор на карточку дисциплины для получения дополнительной информации.
                        </p>
                        <p>
                            Кликните по карточке необходимой дисциплины для просмотра и скачивания файлов.
                        </p>
                    </div>
                </div>
                <div class="disciplines">
                    <div class="disciplines__cards">
                        <div class="disciplines__card">
                            <a href="pages/discipline.php?id=1">
                                <div class="disciplines__card_front">
                                    <div class="disciplines__img">
                                        <img src="img/icons/disp/disp1-card__img.png" alt="Экономика отрасли - иконка">
                                    </div>
                                    <h3 class="disciplines__title">
                                        Экономика отрасли
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="disciplines__card">
                            <a href="pages/discipline.php?id=2">
                                <div class="disciplines__card_front">
                                    <div class="disciplines__img">
                                        <img src="img/icons/disp/disp2-card__img.png" alt="Деньги.Кредит.Банки - иконка">
                                    </div>
                                    <h3 class="disciplines__title">
                                        Деньги.Кредит.Банки
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="disciplines__card">
                            <a href="pages/discipline.php?id=3">
                                <div class="disciplines__card_front">
                                    <div class="disciplines__img">
                                        <img src="img/icons/disp/disp3-card__img.png" alt="Логистика - иконка">
                                    </div>
                                    <h3 class="disciplines__title">
                                        Логистика
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="disciplines__card">
                            <a href="pages/discipline.php?id=4">
                                <div class="disciplines__card_front">
                                    <div class="disciplines__img">
                                        <img src="img/icons/disp/disp4-card__img.png" alt="Правоведение - иконка">
                                    </div>
                                    <h3 class="disciplines__title">
                                        Правоведение
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="disciplines__card">
                            <a href="pages/discipline.php?id=5">
                                <div class="disciplines__card_front">
                                    <div class="disciplines__img">
                                        <img src="img/icons/disp/disp5-card__img.png" alt="Рынок ценных бумаг - иконка">
                                    </div>
                                    <h3 class="disciplines__title">
                                        Рынок ценных бумаг
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="disciplines__card">
                            <a href="pages/discipline.php?id=6">
                                <div class="disciplines__card_front">
                                    <div class="disciplines__img">
                                        <img src="img/icons/disp/disp6-card__img.png" alt="Теория отраслевых рынков - иконка">
                                    </div>
                                    <h3 class="disciplines__title">
                                        Теория отраслевых рынков
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="disciplines__card">
                            <a href="pages/discipline.php?id=7">
                                <div class="disciplines__card_front">
                                    <div class="disciplines__img">
                                        <img src="img/icons/disp/disp7-card__img.png" alt="Экономика недвижимости - иконка">
                                    </div>
                                    <h3 class="disciplines__title">
                                        Экономика недвижимости
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="disciplines__card">
                            <a href="pages/discipline.php?id=8">
                                <div class="disciplines__card_front">
                                    <div class="disciplines__img">
                                        <img src="img/icons/disp/disp8-card__img.png" alt="Производственная практика - иконка">
                                    </div>
                                    <h3 class="disciplines__title">
                                        Производственная практика
                                    </h3>
                                </div>
                            </a>
                        </div>
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
                    require_once 'php/connectDB.php';

                    $result = $mysqli->query("SELECT * FROM `news` WHERE 1 ORDER BY `id` DESC LIMIT 3");
                    while ($row = $result->fetch_assoc()) {
                        echo '<a href="pages/newsItem.php?id='. $row['id'] .'"><div class="news__item" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(pages/news-files/'. $row['file'] .'); background-position: center; background-size: cover;"> 
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
                <div class="btn__wrapper">
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