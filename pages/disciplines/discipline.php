<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        require_once 'E:/Projects/RJS/php/connectDB.php';

        $id = $_GET['id'];

        $sql = "SELECT `name` FROM `disciplines` WHERE `id` = $id";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();

        $title = $row['name'];
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
                    <?=$title?>
                </h1>
                <a href="" class="btn">
                    Вперед
                </a>
            </div>
        </div>
    </header>
    <main>
        <section class="section section_black">
            <div class="section__main">
                
            </div>
        </section>
    </main>
    <?php
        require_once 'E:\Projects\RJS\templates/footer.php';
    ?>
</body>
</html>