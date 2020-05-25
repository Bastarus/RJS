<div class="header-top">
    <a class="logo" href="/">
        <img src="/img/icons/Logo.png" alt="Логотип">
    </a>
    <div class="header-top__button mobile" id ="headerButton">
        <div class="htb_t"></div>
        <div class="htb_m"></div>
        <div class="htb_b"></div>
    </div>
    <nav class="headerMenu" id="headerMenu">
        <ul>
            <li class="headerMenu__item">
                <a href="/"><span data-text="Главная"></span>Главная</a>
            </li>
            <li class="headerMenu__item">
                <a href="/pages/about.php"><span data-text="Обо&nbsp;мне"></span>Обо мне</a>
            </li>
            <li class="headerMenu__item">
                <a href="/pages/news.php"><span data-text="Новости"></span>Новости</a>
            </li>
            <li class="headerMenu__item">
                <a href="/pages/contacts.php"><span data-text="Контакты"></span>Контакты</a>
            </li>
            <li class="headerMenu__item user-menu__btn">
                <?php
                    require_once 'E:/Projects/RJS/php/user/check.php';

                    if(checkUser($user)) {
                        echo '
                        <a href="/php/user/exit.php" class="user-menu__btn_desktop"><img src="/img/icons/close.png" alt="Иконка выхода" title="Выход"></a>
                        <a href="/php/user/exit.php" class="user-menu__btn_mobile">Выход</a>
                        ';
                    } else {
                        echo '
                            <a href="/pages/user.php" class="user-menu__btn_desktop"><img src="/img/icons/user-icon.png" alt="Иконка пользователя"></a>
                            <a href="/pages/user.php" class="user-menu__btn_mobile"><span data-text="Вход/Регистрация"></span>Вход/Регистрация</a>
                        ';
                    }
                ?>
            </li>
        </ul>
    </nav>
</div>