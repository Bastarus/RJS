<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = "Форум";
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
                            <form method="post" action="" class="form">
                                <label for="name">Название темы</label>
                                <input type="text" name="name" id="name" required>
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

        if(isset($_POST['add'])) {
            $name = $_POST['name'];
            $sql = "INSERT INTO `forumthems`(`theme`) VALUES ('$name')";
            $mysqli->query($sql);
        }
    ?>
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
                        Форум
                    </h1>
                    <div class="forumThemes">
                        <h2 class="section__title">
                            Темы
                        </h2>
                        <?php
                            if(checkAdmin($user)) {
                                echo '
                                    <button class="btn" id="openForm">Добавить тему</button>
                                ';
                            }

                            $sql = "SELECT * FROM `forumthems`";
                            $result = $mysqli->query($sql);
                            while($theme = $result->fetch_assoc()) {
                                $them = $theme['theme'];
                                $sqlcount = "SELECT * FROM `forummessages` WHERE `theme` = '$them'";
                                $resultcount = $mysqli->query($sqlcount);
                                $count = $resultcount->num_rows;

                                echo '
                                    <a href="forumTheme.php?id='.$theme['id'].'" class="forumTheme">
                                        <div class="forumTheme__img">
                                            <img src="../img/icons/forum.png" alt="">
                                        </div>
                                        <div class="forumTheme__name">
                                            '.$theme['theme'].'
                                        </div>
                                        <div class="forumTheme__answers">
                                            <p>Ответов</p>
                                            <p>'.$count.'</p>
                                        </div>
                                    </a>
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