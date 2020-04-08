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
                <a href="" class="btn">
                    Вперед
                </a>
            </div>
            <div class="header-main__img">
                <img src="../img/header-img/contacts-img.png" alt="Контакты">
            </div>
        </div>
    </header>
    <main>
        <section class="section section_contacts">
            <div class="section__main">
                <div class="contacts">
                    <div class="tel">
                        <div class="contacts__img">
                            <img src="../img/icons/phone-icon.png" alt="Иконка телефона">
                        </div>
                        <h2 class="section__title">
                            <a href="tel: +79281111111">+79281111111</a>
                        </h2>
                    </div>
                    <div class="mail">
                        <div class="contacts__img">
                            <img src="../img/icons/mail-icon.png" alt="Иконка почты">
                        </div>
                        <h2 class="section__title">
                            fakemail@mail.ru
                        </h2>
                    </div>
                    <div class="soc">
                        <div><img src="../img/icons/soc/facebook-logo.svg" alt="Facebook"></div>
                        <div><img src="../img/icons/soc/vk-logo.svg" alt="VK"></div>
                        <div><img src="../img/icons/soc/whatsapp-logo.svg" alt="WhatsApp"></div>
                    </div>
                </div>
            </div>
            <div class="black-block">
                <div class="section__info">
                    <div class="section__title-block">
                        <h2 class="section__title">
                            Адрес
                        </h2>
                    </div>
                    <p class="section__text">
                        г. Волгодонск, ул. Ленина, 73 каб. 205, второй этаж
                    </p>
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