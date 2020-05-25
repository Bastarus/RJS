<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = 'Контакты';
        require_once '../templates/head.php';
    ?>
</head>
<body>
    <header class="header">
        <?php
            require_once '../templates/header-top.php';
        ?>
        <div class="header-main">
            <div class="header-main__info">
                <h1 class="header-main__title">
                    Контакты
                </h1>
                <button class="btn header-btn">
                    Вперед
                </button>
            </div>
            <div class="header-main__img">
                <img src="../img/header-img/contacts-img.png" alt="Контакты">
            </div>
        </div>
    </header>
    <main>
        <section class="section section_contacts section_black" id="firstSection">
            <div class="section__main">
                <div class="section__info contacts">
                    <div class="section__text">
                        <h2 class="contact__title">
                            <span class="yellow">Рабочий телефон</span>
                        </h2>
                        <p>
                            <a href="tel: +78639221924">+7 (8639) 22-19-24</a>
                        </p>
                        <h2 class="contact__title">
                            <span class="yellow">Почта</span>
                        </h2>
                        <p>
                            <a href="mailto: zsrogacheva@mephi.ru">zsrogacheva@mephi.ru</a>
                        </p>
                        <h2 class="contact__title">
                            <span class="yellow">Режим работы</span>
                        </h2>
                        <p>
                            8:00-17:00
                        </p>
                        <h2 class="contact__title">
                            <span class="yellow">Адрес</span>
                        </h2>
                        <adress>
                            347360, г. Волгодонск Ростовской области, ул. Ленина, 73/94, ауд. 205
                        </adress>
                    </div>
                </div>
            </div>
            <div class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A063f2dcfd6da8652b25010ab0607893678e12a4b8dc153ce6616f1595ef38a56&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <?php
                require_once '../php/user/check.php';

                if(count($user) > 0) {
                    echo '
                    <div class="submitMessage">
                        <h2 class="section__title">
                            Отправить письмо
                        </h2>
                        <div class="form-wrapper">
                            <form action="../php/mail.php" class="form" method="post">
                                <input type="hidden" name="email" id="email" value="'. $user['email'] .'">
                                <label for="title">Заголовок письма</label>
                                <input type="text" name="title" id="title">
                                <label for="message">Ваше сообщение</label>
                                <textarea name="message" id="message" cols="30" rows="5" required></textarea>
                                <input type="submit" value="Отправить">
                            </form>
                        </div>
                    </div>
                    ';
                }
            ?>
        </section>
    </main>
    <?php
        require_once '../templates/footer.php';
    ?>
</body>
</html>