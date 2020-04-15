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
        <section class="section section_bg-lines">
            <div class="section__main">
                <div class="news">
                    <div class="news__item">
                        <p class="news__date section__text">
                            28.02.2020
                        </p>
                        <div class="news__line"></div>
                        <h3 class="news__title section__subtitle">
                            Заголовок новости
                        </h3>
                        <p class="news__text_">
                            Sunt deserunt reprehenderit aliqua pariatur voluptate ullamco nisi duis.
                        </p>
                    </div>
                    <div class="news__item">
                        <p class="news__date section__text">
                            28.02.2020
                        </p>
                        <div class="news__line"></div>
                        <h3 class="news__title section__subtitle">
                            Заголовок новости
                        </h3>
                        <p class="news__text_">
                            Sunt deserunt reprehenderit aliqua pariatur voluptate ullamco nisi duis.
                        </p>
                    </div>
                    <div class="news__item">
                        <p class="news__date section__text">
                            28.02.2020
                        </p>
                        <div class="news__line"></div>
                        <h3 class="news__title section__subtitle">
                            Заголовок новости
                        </h3>
                        <p class="news__text_">
                            Sunt deserunt reprehenderit aliqua pariatur voluptate ullamco nisi duis.
                        </p>
                    </div>
                    <div class="news__item">
                        <p class="news__date section__text">
                            28.02.2020
                        </p>
                        <div class="news__line"></div>
                        <h3 class="news__title section__subtitle">
                            Заголовок новости
                        </h3>
                        <p class="news__text_">
                            Sunt deserunt reprehenderit aliqua pariatur voluptate ullamco nisi duis.
                        </p>
                    </div>
                    <div class="news__item">
                        <p class="news__date section__text">
                            28.02.2020
                        </p>
                        <div class="news__line"></div>
                        <h3 class="news__title section__subtitle">
                            Заголовок новости
                        </h3>
                        <p class="news__text_">
                            Sunt deserunt reprehenderit aliqua pariatur voluptate ullamco nisi duis.
                        </p>
                    </div>
                    <div class="news__item">
                        <p class="news__date section__text">
                            28.02.2020
                        </p>
                        <div class="news__line"></div>
                        <h3 class="news__title section__subtitle">
                            Заголовок новости
                        </h3>
                        <p class="news__text_">
                            Sunt deserunt reprehenderit aliqua pariatur voluptate ullamco nisi duis.
                        </p>
                    </div>
                </div>
                <div class="news__buttons">
                    <a href="" class="btn">
                        Добавить новость
                    </a>
                    <a href="" class="btn">
                        Загрузить следующие
                    </a>
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once 'E:\Projects\RJS\templates/footer.php';
    ?>
</body>
</html>