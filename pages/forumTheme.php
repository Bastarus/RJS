<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        require_once '../php/connectDB.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM `forumthems` WHERE `id` = '$id'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        $title = $row['theme'];

        require_once '../templates/head.php';
    ?>
</head>
<body>
    <header class="header">
        <?php
            require_once '../templates/header-top.php';
        ?>
    </header>
    <main>
        <section class="section">
            <div class="section__main">
                <div class="section__info">
                    <h1 class="page__title">
                        <?=$title?>
                    </h1>
                   <?php
                        require_once '../php/user/check.php';

                        if(checkUser($user)) {
                            echo '
                                <div class="form-wrapper">
                                    <form action="../php/addMessage.php" class="form" method="post">
                                        <label for="message">Текст сообщения</label>
                                        <textarea name="message" id="message" cols="30" rows="1" required></textarea>
                                        <input type="hidden" id="theme" name="theme" value="'.$title.'">
                                        <input name="add" type="submit" class="submit" value="Отправить">
                                    </form>
                                </div>
                            ';
                        } else {
                            echo 'Оставлять сообщения на форуме могут только зарегистрированные пользователи.';
                        }
                   ?>

                   <div class="messages">
                        <h2 class="section__title">
                            Сообщения
                        </h2>
                        <?php
                            $sql = "SELECT * FROM `forummessages` WHERE `theme`='$title'";
                            $result = $mysqli->query($sql);
                            while($message = $result->fetch_assoc()) {
                                echo '
                                    <div class="message">
                                        <div class="messageAuthor">
                                            '.$message['author'].'
                                        </div>
                                        <div class="messageText">
                                            '.$message['text'].'
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