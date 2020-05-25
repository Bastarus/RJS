<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = 'Обо мне';
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
                    Обо мне
                </h1>
                <button class="btn header-btn">
                    Вперед
                </button>
            </div>
            <div class="header-main__img">
                <img src="../img/header-img/about-img.png" alt="Обо мне">
            </div>
        </div>
    </header>
    <main>
        <section class="section section_black" id="firstSection">
            <div class="section__main section__main_row">
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
                        <a href="../img/Rectangle 30.png"><img src="../img/photos/about-photo.jpg" alt="Мое фото"></a>
                    </div>
                    <div class="section__text">
                        <p>
                            <span class="yellow">Должность:</span> доцент
                        </p>
                        <p>
                            <span class="yellow">Ученая степень:</span> кандидат экономических наук 
                            (присуждена по специальности 08.00.05 – Экономика и управление народным хозяйством: 
                            экономика, организация и управление предприятиями, отраслями, комплексами 
                            (промышленность)
                        </p>
                        <p>
                            <span class="yellow">Специальность:</span> экономика и управление на предприятии 
                            (квалификация – экономист-менеджер), юриспруденция (квалификация – юрист)  
                        </p>
                        <p>
                            <span class="yellow">Преподаваемые дисциплины:</span>
                            - <a href="/pages/discipline.php?id=3">
                                Логистика, 
                            </a>
                            <a href="/pages/discipline.php?id=1">
                                Финансовый менеджмент, 
                            </a>
                            <a href="/pages/discipline.php?id=2">
                                Деньги.Кредит.Банки, 
                            </a>
                            <a href="/pages/discipline.php?id=4">
                                Правоведение, 
                            </a>
                            <a href="/pages/discipline.php?id=5">
                                Рынок ценных бумаг, 
                            </a>
                            <a href="/pages/discipline.php?id=6">
                                Теория отраслевых рынков, 
                            </a>
                            <a href="/pages/discipline.php?id=7">
                                Экономика недвижимости, 
                            </a>
                            <a href="/pages/discipline.php?id=8">
                                Производственная практика.
                            </a>
                        </p>
                    </div>
                    <div class="soc">
                        <div><a href=""><img src="../img/icons/soc/facebook-logo.png" alt="Facebook"></a></div>
                        <div><a href=""><img src="../img/icons/soc/vk-logo.png" alt="VK"></a></div>
                        <div><a href=""><img src="../img/icons/soc/whatsapp-logo.png" alt="WhatsApp"></a></div>
                    </div>
                </div>
                <div class="section__img desktop">
                    <img src="../img/photos/about-photo.jpg" alt="Мое фото" width="80%">
                </div>
            </div>
        </section>
        <section class="section">
            <div class="section__main">
                <div class="progress">
                    <div class="progress-card">
                        <div class="progress__img">
                            <img src="../img/icons/about/about-card1__img.png" alt="Преподаватель">
                        </div>
                        <h3 class="progress__title" id="progress__title1">
                            8
                        </h3>
                        <p class="progress__text">
                            Преподаваемых дисциплин
                        </p>
                    </div>
                    <div class="progress-card">
                        <div class="progress__img">
                            <img src="../img/icons/about/about-card2__img.png" alt="Студент">
                        </div>
                        <h3 class="progress__title progress__title2">
                            2000+
                        </h3>
                        <p class="progress__text">
                            Выпущенных студентов
                        </p>
                    </div>
                    <div class="progress-card">
                        <div class="progress__img">
                            <img src="../img/icons/about/about-card3__img.png" alt="Научная работа">
                        </div>
                        <h3 class="progress__title progress__title3">
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
                            Повышение квалификации и (или) профессиональная переподготовка:
                        </h2>
                    </div>
                    <div class="section__text">
                        <p>2013 г. «Управление персоналом»;</p>
                        <p>2013 г. «Мультимедиа технологии в совершенствовании учебного процесса»;</p>
                        <p>2013 г. «Современные методы менеджмента качества и опыт внедрения систем менеджмента качества в образовательных учреждениях»;</p>
                        <p>2014 г. «Производственная система Росатом (Система 5С: офис);</p>
                        <p>2015 г. «Информационные технологии в планировании учебного процесса с учетом изменений ФГОС ВПО»;</p>
                        <p>2015 г. Обучение в ДГТУ г. Шахты  по программе «Информационные технологии в планировании учебного процесса с учетом изменений ФГОС ВПО»;</p>
                        <p>2017-2018гг. Программа переподготовки «Психолого-педагогические основы преподавательской деятельности»;</p>
                        <p>2017-2018гг. «Технический английский в подготовке инженерных кадров для глобальной экспансии ГК Росатом».</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once '../templates/footer.php';
    ?>
</body>
</html>