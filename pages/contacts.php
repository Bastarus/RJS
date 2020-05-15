<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = 'Контакты';
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
                            <span class="yellow">Телефон</span>
                        </h2>
                        <p>
                            <a href="tel: +79281111111">+79281111111</a>
                        </p>
                        <h2 class="contact__title">
                            <span class="yellow">Почта</span>
                        </h2>
                        <p>
                            fakemail@mail.ru
                        </p>
                        <h2 class="contact__title">
                            <span class="yellow">Режим работы</span>
                        </h2>
                        <p>
                            8:00-17:00
                        </p>
                    </div>
                </div>
            </div>
            <div class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A063f2dcfd6da8652b25010ab0607893678e12a4b8dc153ce6616f1595ef38a56&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </section>
    </main>
    <?php
        require_once 'E:\Projects\RJS\/templates/footer.php';
    ?>
</body>
</html>