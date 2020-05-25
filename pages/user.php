<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = 'Авторизация';
        require_once '../templates/head.php';
    ?>
</head>
<body>
    <header>
        <?php
            require_once '../templates/header-top.php';
        ?>
    </header>
    <main>
        <section class="section">
            <div class="form-wrapper form-wrapper_active form-wrapper_small">
                <form action="../php/user/auth.php" class="form" id="form-auth" method="post">
                    <label for="login">Логин</label>
                    <input type="text" name="login" id="login" required>
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password" required>
                    <input name="auth" type="submit" id="auth" value="Вход">
                    <a id="openReg">Еще не зарегистрированы?</a>
                </form>
                <form action="../php/user/reg.php" class="form form_hidden" id="form-reg" method="post">
                    <label for="login">Логин</label>
                    <input type="text" name="login" id="login" required pattern="[a-zA-Z]{6,}" title="Не менее 6 латинских символов">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required>
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" title="Минимум 8 символов, одна цифра, одна буква в верхнем регистре и одна в нижнем">
                    <input name="reg" type="submit" id="reg" value="Регистрация">
                    <a id="openAuth">Уже есть аккаунт?</a>
                </form>
            </div>
        </section>
    </main>
    <?php
        require_once '../templates/footer.php';
    ?>
</body>
</html>