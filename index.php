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
            require_once 'E:/Projects/RJS/templates/header-top.php';
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
                <a href="" class="btn">
                    Вперед
                </a>
            </div>
            <div class="header-main__img">
                <img src="img/header-img/header__img.png" alt="Фото">
            </div>
        </div>
    </header>
    <main>
        <section class="section section_bg-lines section_withBB">
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
                            <div class="disciplines__card_front">
                                <div class="disciplines__img">
                                    <img src="img/icons/disp/disp1-card__img.png" alt="Экономика отрасли - иконка">
                                </div>
                                <h3 class="disciplines__title">
                                    Экономика отрасли
                                </h3>
                            </div>
                            <div class="disciplines__card_back">
                                <div class="section__text">
                                    <p>
                                        Дисциплина, цель которой заключает-ся в познании теоретических основ 
                                        в области экономики и полу-чении практических навыков по обеспечению 
                                        эффективной рабо-ты предприятий
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="disciplines__card">
                            <div class="disciplines__card_front">
                                <div class="disciplines__img">
                                    <img src="img/icons/disp/disp2-card__img.png" alt="Деньги.Кредит.Банки - иконка">
                                </div>
                                <h3 class="disciplines__title">
                                    Деньги.Кредит.Банки
                                </h3>
                            </div>
                            <div class="disciplines__card_back">
                                <div class="section__text">
                                    <p>
                                        Дисциплина рассматривает основные вопросы денежного обращения, 
                                        принципы, методы и формы кредитования национальной экономики, 
                                        механизмы работы банковской системы
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="disciplines__card">
                            <div class="disciplines__card_front">
                                <div class="disciplines__img">
                                    <img src="img/icons/disp/disp3-card__img.png" alt="Логистика - иконка">
                                </div>
                                <h3 class="disciplines__title">
                                    Логистика
                                </h3>
                            </div>
                            <div class="disciplines__card_back">
                                <div class="section__text">
                                    <p>
                                        Дисциплина изучает логистическую деятельность, обес-печивающую 
                                        принятие практических решений в области оптимизации товародвижения 
                                        в торговле.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="disciplines__card">
                            <div class="disciplines__card_front">
                                <div class="disciplines__img">
                                    <img src="img/icons/disp/disp4-card__img.png" alt="Правоведение - иконка">
                                </div>
                                <h3 class="disciplines__title">
                                    Правоведение
                                </h3>
                            </div>
                            <div class="disciplines__card_back">
                                <div class="section__text">
                                    <p>
                                        Дисциплина изучает общие закономерности возникновения, 
                                        развития, а также терминологию государства и права.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="disciplines__card">
                            <div class="disciplines__card_front">
                                <div class="disciplines__img">
                                    <img src="img/icons/disp/disp5-card__img.png" alt="Рынок ценных бумаг - иконка">
                                </div>
                                <h3 class="disciplines__title">
                                    Рынок ценных бумаг
                                </h3>
                            </div>
                            <div class="disciplines__card_back">
                                <div class="section__text">
                                    <p>
                                        Дисциплина изучает роль и функции рынка ценных бумаг в системе 
                                        рыночной экономики, теоретические основы и мотивации действий субъектов 
                                        рынка ценных бумаг
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="disciplines__card">
                            <div class="disciplines__card_front">
                                <div class="disciplines__img">
                                    <img src="img/icons/disp/disp6-card__img.png" alt="Теория отраслевых рынков - иконка">
                                </div>
                                <h3 class="disciplines__title">
                                    Теория отраслевых рынков
                                </h3>
                            </div>
                            <div class="disciplines__card_back">
                                <div class="section__text">
                                    <p>
                                        Дисциплина изучает основы формирования и функционирования рыночных структур, 
                                        поведения субъектов рынка, реализации государственной отраслевой 
                                        и промышленной политики
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="disciplines__card">
                            <div class="disciplines__card_front">
                                <div class="disciplines__img">
                                    <img src="img/icons/disp/disp7-card__img.png" alt="Экономика недвижимости - иконка">
                                </div>
                                <h3 class="disciplines__title">
                                    Экономика недвижимости
                                </h3>
                            </div>
                            <div class="disciplines__card_back">
                                <div class="section__text">
                                    <p>
                                        Дисциплина изучает сущность и основные признаки недвижимого имущества, 
                                        подходы и методы оценки недвижимости, особенности финансирования 
                                        объектов недвижимости
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="disciplines__card">
                            <div class="disciplines__card_front">
                                <div class="disciplines__img">
                                    <img src="img/icons/disp/disp8-card__img.png" alt="Производственная практика - иконка">
                                </div>
                                <h3 class="disciplines__title">
                                    Производственная практика
                                </h3>
                            </div>
                            <div class="disciplines__card_back">
                                <div class="section__text">
                                    <p>
                                        Производственная практика базируется на знаниях, умениях и навыках 
                                        по дисциплинам, изученным в процессе обучения
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="disciplines__arrows">
                        <a href="" class="disciplines__arrow disciplines__arrow_prev">
                            <img src="img/icons/disp/arrows/disciplines__arrow_prev.svg" alt="Предыдущие">
                        </a>
                        <a href="" class="disciplines__arrow disciplines__arrow_next">
                            <img src="img/icons/disp/arrows/disciplines__arrow_next.svg" alt="Следующие">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section_bg-lines">
            <div class="section__main">
                <div class="section__title-block">
                    <h2 class="section__title section__title_black">
                        Последние новости
                    </h2>
                </div>
                <div class="news">
                    <div class="news__item">
                        <p class="news__date section__text">
                            28.02.2020
                        </p>
                        <div class="news__line"></div>
                        <h3 class="news__title">
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
                        <h3 class="news__title">
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
                        <h3 class="news__title">
                            Заголовок новости
                        </h3>
                        <p class="news__text_">
                            Sunt deserunt reprehenderit aliqua pariatur voluptate ullamco nisi duis.
                        </p>
                    </div>
                </div>
                <div class="btn__wrapper">
                    <a href="pages/news/news.php" class="btn">Смотреть все новости</a>
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once 'E:\Projects\RJS\templates/footer.php';
    ?>
</body>
</html>