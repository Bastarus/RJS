<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        require_once '../php/connectDB.php';

        $id = $_GET['id'];

        $result = $mysqli->query("SELECT * FROM `news` WHERE `id` = $id");
        $row = $result->fetch_assoc();

        $title = $row['title'];
        if($row['type'] == "") {
            $header = "header";
        } else {
            $header = "header header_big";
        }
        require_once '../templates/head.php';
        
    ?>
    <link rel="stylesheet" href="../css/news.css">
    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
    <style>
        .header_big {
            background-image: url("news-files/<?php echo $row['file'] ?>");
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
                            <input name="edit" class="submit" type="submit" id="add" value="Обновить">
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
    <header class="<?=$header?>">
        <?php
            require_once '../templates/header-top.php';
        ?>
    </header>
    <main>
        <section class="section">
            <div class="section__main">
                <div class="section__info">
                    <h1 class="page__title">
                    <?=$row['title']?>
                    </h1>
                    <div class="newsItem__text">
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
                <script>
                    CKEDITOR.replace( 'editText' );
                </script>
            </div>
        </section>
        <section class="section">
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
                                    <textarea name="comment" id="comment" cols="30" rows="10" required></textarea>
                                    <input type="hidden" name="page_id" id="page_id" value="'.$id.'">
                                    <input type="hidden" name="login" id="login" value="'.$user['login'].'">
                                    <input type="hidden" name="avatar" id="avatar" value="'.$user['avatar'].'">
                                    <input type="submit" class="submit" value="Добавить комментарий">
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
                                        <div class="comment-img" style="background-image: url(../img/user-avatars/'.$comment['avatar'].')">
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
                                                    '. htmlspecialchars_decode($comment['text']) .'
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