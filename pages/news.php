<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = 'Новости';
        require_once '../templates/head.php';
    ?>
</head>
<body>
    <?php
        require_once '../php/user/check.php';

        if(checkAdmin($user)) {
            echo '
            <div class="modal" id="modal">
                <div class="modal-content">
                    <div class="form-wrapper" id="form-wrapper">
                        <form enctype="multipart/form-data" name="addNews" method="post" action="../../php/addNews.php" class="form">
                            <label for="title">Заголовок</label>
                            <input type="text" name="title" id="title" required>
                            <label for="text">Текст новости</label>
                            <textarea name="text" id="text" cols="10" rows="1" required></textarea>
                            <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                            <input type="file" name="file" id="file">
                            <input name="add" class="submit" type="submit" id="add" value="Добавить">
                        </form>
                        <div class="closeForm" id="closeForm">
                            <img src="../../img/icons/close.png" alt="Закрыть форму">
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
    ?>
    <header class="header">
        <?php
            require_once '../templates/header-top.php';
        ?>
    </header>
    <main>
        <section class="section section_black">
            <div class="section__main">
                <h1 class="page__title">
                    Новости
                </h1>
                <div class="news">
                    <?php
                        $result = $mysqli->query("SELECT * FROM `news` WHERE 1 ORDER BY `id` DESC LIMIT 10");
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="news-item">
                                    <div class="news__img" style="background-image: url(news-files/'.$row['file'].')">
                                    </div>
                                    <div class="news__info">
                                        <div class="news__date">
                                            <div><img src="../img/icons/calendar.png"></div>
                                            <p>'.$row['date'].'</p>
                                        </div>
                                        <h3 class="news__title">
                                            '.$row['title'].'
                                        </h3>
                                        <p class="news__text">
                                            '.substr($row['text'], 0, 30).'...
                                        </p>
                                        <div class="btn-wrapper">
                                            <a href="newsItem.php?id='.$row['id'].'" class="btn">Читать далее</a>
                                        </div>
                                    </div>
                                </div>';
                        }
                    ?>
                </div>
                <?php
                    if(checkAdmin($user)) {
                        echo '
                        <div class="news__buttons">
                            <div class="btn" id="openForm">
                                Добавить новость
                            </div>
                        </div>
                        ';
                    }
                ?>
            </div>
        </section>
    </main>
    <?php
        require_once '../templates/footer.php';
    ?>
</body>
</html>