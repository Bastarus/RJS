<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $servername = "localhost";
        $database = "rjs";
        $username = "root";
        $password = "";

        $id = $_GET['id'];

        $mysqli = new mysqli($servername, $username, $password, $database);

        $result = $mysqli->query("SELECT * FROM `news` WHERE `id` = $id");
        $row = $result->fetch_assoc();

        $title = $row['title'];
        require_once '../templates/head.php';
    ?>
    <style>
        .header {
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("news-files/<?php echo $row['file'] ?>");
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php
        require_once '../php/user/check.php';

        if(checkAdmin($user)) {
            echo '
            <div class="modal" id="modal">
                <div class="modal-content">
                    <div class="form-wrapper" id="form-wrapper">
                        <form name="editNews" method="post" action="../../php/editNews.php?id='.$row['id'].'" class="form">
                            <label for="title">Заголовок</label>
                            <input type="text" name="editTitle" id="title" value="'.$row['title'].'">
                            <label for="text">Текст новости</label>
                            <textarea name="editText" id="editText" cols="10" rows="1">'.$row['text'].'</textarea>
                            <input name="edit" type="submit" id="add" value="Обновить">
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
    <header class="header header_big">
        <?php
            require_once '../templates/header-top.php';
        ?>
        <div class="header-main">
            <div class="header-main__info">
                <h1 class="header-main__title">
                   <?=$row['title']?>
                </h1>
                <button class="btn header-btn">
                    Вперед
                </button>
            </div>
        </div>
    </header>
    <main>
        <section class="section section_black" id="firstSection">
            <div class="section__main">
                <div class="section__info">
                    <div class="section__text newsItem__text">
                        <p>
                            <?php
                                echo $row['text'];
                            ?>
                        </p>
                    </div>
                </div>
                <?php
                    if(checkAdmin($user)) {
                        echo '
                        <div class="news__buttons">
                            <div class="btn" id="openForm">
                                Редактировать
                            </div>
                            <a class="btn" id="removeNews" href="../../php/removeNews.php?id='.$row['id'].'">
                                Удалить новость
                            </a>
                        </div>
                        ';
                    }
                ?>
            </div>
        </section>
        <section class="section section_black">
            <div class="section__main">
                <div class="section__info">
                    <div class="section__title-block">
                        <h2 class="section__title">
                            Комментарии
                        </h2>
                    </div>
                    <?php
                        require_once '../php/user/check.php';

                        if(checkUser($user)) {
                            echo '
                            <div class="form-wrapper">
                                <form action="../php/addComment.php" class="form" method="post">
                                    <label for="comment">Текст комментария</label>
                                    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                                    <input type="hidden" name="page_id" id="page_id" value="'.$id.'">
                                    <input type="hidden" name="login" id="login" value="'.$_COOKIE['login'].'">
                                    <input type="submit" value="Добавить комментарий">
                                </form>
                            </div>
                            ';
                        } else {
                            echo 'Оставлять комментарии могут только зарегистрированные пользователи.';
                        }
                    ?>
                    <div class="comments">
                        <?php
                            $sql = "SELECT * FROM `comments` WHERE `page_id`='$id'";
                            $resultComments = $mysqli->query($sql);

                            while($comment = $resultComments->fetch_assoc()) {
                                echo '
                                    <div class="comment">
                                        <div class="comment-img">
                                            <img src="../img/icons/user-icon.png">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-info">
                                                <div class="comment-from">
                                                    <span class="yellow">'. $comment['login'] .'</span>
                                                </div>
                                                <div class="comment-date">
                                                    '. $comment['date'] .'
                                                </div>
                                            </div>
                                            <div class="comment-text">
                                                    '. $comment['text'] .'
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                        ?>
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