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
                <?php
                    $servername = "localhost";
                    $database = "rjs";
                    $username = "root";
                    $password = "";

                    $mysqli = new mysqli($servername, $username, $password, $database);

                    $result = $mysqli->query("SELECT * FROM `news` WHERE 1");

                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="news__item">
                                <p class="news__date section__text">
                                    '. $row['date'] .'
                                </p>
                                <div class="news__line"></div>
                                <h3 class="news__title section__subtitle">
                                    '. $row['title'] .'
                                </h3>
                                <p class="news__text_">
                                    '. $row['text'] .'
                                </p>
                            </div>';
                    }
                ?>
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
                    <a href="addNews.php" class="btn">
                        Добавить новость
                    </a>
                    <a href="" class="btn">
                        Загрузить следующие
                    </a>
                </div>
                <div class="form-wrapper">
                    <form name="form1" method="post" action="addNews.php" class="news-form">
                        <label for="title">Заголовок</label>
                        <input type="text" name="title" id="title">
                        <label for="text">Текст новости</label>
                        <textarea name="text" id="text" cols="30" rows="10"></textarea>
                        <input type="file" id="image" name="image">
                        <input name="hiddenField" type="hidden" value="add_n">
                        <input name="add" type="submit" id="add" value="Добавить">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once 'E:\Projects\RJS\templates/footer.php';
    ?>
</body>
</html>