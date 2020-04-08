<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = 'Обо мне';
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
                    Обо мне
                </h1>
                <a href="" class="btn">
                    Вперед
                </a>
            </div>
            <div class="header-main__img">
                <img src="../img/header-img/about-img.png" alt="Обо мне">
            </div>
        </div>
    </header>
    <main>
        <section class="section section_black">
            <div class="section__main">
                <div class="section__info">
                    <div class="section__title-block">
                        <h2 class="section__title">
                            Рогачева Жанна
                        </h2>
                        <p class="section__text">
                            Преподаватель
                        </p>
                    </div>
                    <div class="section__img mobile">
                        <img src="../img/Rectangle 30.png" alt="Мое фото">
                    </div>
                    <div class="section__text">
                        <p>
                            Voluptate proident ex velit ut duis tempor occaecat sit voluptate incididunt 
                            ullamco dolor. Excepteur nostrud eu cupidatat cillum nisi nisi do duis laborum 
                            labore veniam deserunt deserunt dolor. 
                        </p>
                        <p>
                            Duis ullamco nisi incididunt sunt consectetur elit tempor proident sunt. 
                            Deserunt fugiat occaecat ea ipsum consequat. Enim enim tempor cillum ea nisi est 
                            tempor adipisicing ut minim elit et ullamco velit. Minim duis ex amet aliqua aute 
                            ea velit veniam cupidatat. 
                        </p>
                        <p>
                            Voluptate proident ex velit ut duis tempor occaecat sit voluptate incididunt 
                            ullamco dolor. Excepteur nostrud eu cupidatat cillum nisi nisi do duis laborum 
                            labore veniam deserunt deserunt dolor.  
                        </p>
                        <p>
                            Duis ullamco nisi incididunt sunt consectetur elit tempor proident sunt. 
                            Deserunt fugiat occaecat ea ipsum consequat. Enim enim tempor cillum ea nisi est 
                            tempor adipisicing ut minim elit et ullamco velit. Minim duis ex amet aliqua aute 
                            ea velit veniam cupidatat. 
                        </p>
                    </div>
                    <div class="soc">
                        <div><a href=""><img src="../img/icons/soc/facebook-logo.svg" alt="Facebook"></a></div>
                        <div><a href=""><img src="../img/icons/soc/vk-logo.svg" alt="VK"></a></div>
                        <div><a href=""><img src="../img/icons/soc/whatsapp-logo.svg" alt="WhatsApp"></a></div>
                    </div>
                </div>
                <div class="section__img desktop">
                    <img src="../img/Rectangle 30.png" alt="Мое фото">
                </div>
            </div>
        </section>
        <section class="section">
            <div class="section__main">
                <div class="progress">
                    <div class="progress-card black-block">
                        <div class="progress__img">
                            <img src="../img/icons/about/about-card1__img.png" alt="Преподаватель">
                        </div>
                        <h3 class="progress__title">
                            12
                        </h3>
                        <p class="progress__text">
                            Преподаваемых дисциплин
                        </p>
                    </div>
                    <div class="progress-card black-block">
                        <div class="progress__img">
                            <img src="../img/icons/about/about-card2__img.png" alt="Студент">
                        </div>
                        <h3 class="progress__title">
                            2000+
                        </h3>
                        <p class="progress__text">
                            Выпущенных студентов
                        </p>
                    </div>
                    <div class="progress-card black-block">
                        <div class="progress__img">
                            <img src="../img/icons/about/about-card3__img.png" alt="Научная работа">
                        </div>
                        <h3 class="progress__title">
                            12
                        </h3>
                        <p class="progress__text">
                            Научных работ
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section_black">
            <div class="section__main">
                <div class="section__info">
                    <div class="section__title-block">
                        <h2 class="section__title">
                            Образование
                        </h2>
                    </div>
                    <p class="section__text">
                        Voluptate proident ex velit ut duis tempor occaecat sit voluptate incididunt 
                        ullamco dolor. Excepteur nostrud eu cupidatat cillum nisi nisi do duis laborum 
                        labore veniam deserunt deserunt dolor. 
                    </p>
                    <p class="section__text">
                        Duis ullamco nisi incididunt sunt consectetur elit tempor proident sunt. 
                        Deserunt fugiat occaecat ea ipsum consequat. Enim enim tempor cillum ea nisi 
                        est tempor adipisicing ut minim elit et ullamco velit. Minim duis ex amet aliqua 
                        aute ea velit veniam cupidatat.
                    </p>
                </div>
                <div class="section__img">
                    <img src="../img/Sertifikat-obrazets-1024x639.jpg" alt="Сертификат">
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once 'E:\Projects\RJS\/templates/footer.php';
    ?>
</body>
</html>