<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = 'Регистрация';
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
            <div class="form-wrapper_active">
                <form action="" class="form">
                    <label for="login">Логин</label>
                    <input type="text" name="login" id="login" required>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required>
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password" required>
                    <input name="add" type="submit" id="add" value="Добавить">
                </form>
            </div>
        </section>
    </main>
    <?php
        require_once '../templates/footer.php';
    ?>
</body>
</html>