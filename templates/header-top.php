<div class="header-top">
    <a class="logo" href="/">
        <img src="/img/icons/Logo.png" alt="Логотип">
    </a>
    <a href="#" class="bvi-open" title="Версия сайта для слабовидящих"><img src="/img/icons/eye.png" alt=""></a>
    <div class="header-top__button mobile" id ="headerButton">
        <div class="htb_t"></div>
        <div class="htb_m"></div>
        <div class="htb_b"></div>
    </div>
    <nav class="headerMenu" id="headerMenu">
        <ul>
            <li class="headerMenu__item">
                <a href="/">Главная</a>
            </li>
            <li class="headerMenu__item">
                <a href="/pages/about.php">Обо мне</a>
            </li>
            <li class="headerMenu__item">
                <a href="/pages/news.php">Новости</a>
            </li>
            <li class="headerMenu__item">
                <a href="/pages/contacts.php">Контакты</a>
            </li>
            <li class="headerMenu__item user-menu__btn">
                <?php
                    require_once 'E:/Projects/RJS/php/connectDB.php';
                    $login = $_COOKIE['login'];
                    $sql = "SELECT * FROM `users` WHERE `login` = '$login'";
                    $result = $mysqli->query($sql);
                    $user = $result->fetch_assoc();

                    if(count($user) > 0) {
                        echo '
                            <a href="/php/user/exit.php">Выход</a>
                        ';
                    } else {
                        echo '
                            <a href="/pages/user.php">Войти</a>
                        ';
                    }
                ?>
            </li>
        </ul>
    </nav>
</div>