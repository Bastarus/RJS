<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = 'Новости';
        require_once '../templates/head.php';
    ?>
    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
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
    <script>
        CKEDITOR.replace( 'text' );
    </script>
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
                <div class="news">
                    <?php
                        function yandex_link_bar($page, $count, $pages_count, $show_link) {
                        // $show_link - это количество отображаемых ссылок;
                        // нагляднее будет, когда это число будет парное
                        // Если страница всего одна, то вообще ничего не выводим
                        if ($pages_count == 1) return false;
                        $sperator = ' '; // Разделитель ссылок; например, вставить "|" между ссылками
                        // Для придания ссылкам стиля
                        $style = 'style="color: #808000; text-decoration: none;"';
                        $begin = $page - intval($show_link / 2);
                        unset($show_dots);
                        // Сам постраничный вывод
                        // Если количество отображ. ссылок больше кол. страниц
                        if ($pages_count <= $show_link + 1) $show_dots = 'no';
                        // Вывод ссылки на первую страницу
                        if (($begin > 2) && ($pages_count - $show_link > 2)) {
                        echo '<a '.$style.' href='.$_SERVER['php_self'].'?page=1> |< </a> ';
                        }
                        for ($j = 0; $j <= $show_link; $j++) // Основный цикл вывода ссылок
                        {
                        $i = $begin + $j; // Номер ссылки
                        // Если страница рядом с началом, то увеличить цикл для того,
                        // чтобы количество ссылок было постоянным
                        if ($i < 1) continue;
                        // Подобное находится в верхнем цикле
                        if (!isset($show_dots) && $begin > 1) {
                        echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.($i-1).'><b>...</b></a> ';
                        $show_dots = "no";
                        }
                        // Номер ссылки перевалил за возможное количество страниц
                        if ($i > $pages_count) break;
                        if ($i == $page) {
                        echo ' <a '.$style.' ><b>'.$i.'</b></a> ';
                        } else {
                        echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.$i.'>'.$i.'</a> ';
                        }
                        // Если номер ссылки не равен кол. страниц и это не последняя ссылка
                        if (($i != $pages_count) && ($j != $show_link)) echo $sperator;
                        // Вывод "..." в конце
                        if (($j == $show_link) && ($i < $pages_count)) {
                        echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.($i+1).'><b>...</b></a> ';
                        }
                        }
                        // Вывод ссылки на последнюю страницу
                        if ($begin + $show_link + 1 < $pages_count) {
                        echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.$pages_count.'> >| </a>';
                        }
                        return true;
                        } // Конец функции
                        
                        
                        // Подготовка к постраничному выводу
                        $perpage = 5; // Количество отображаемых данных из БД
                        if (empty($_GET['page']) || ($_GET['page'] <= 0)) {
                        $page = 1;
                        } else {
                        $page = (int) $_GET['page']; // Считывание текущей страницы
                        }
                        // Общее количество информации
                        $countt = $mysqli->query('SELECT * FROM `news`') or die('error! Записей не найдено!');
                        $count = $countt->num_rows;
                        $pages_count = ceil($count / $perpage); // Количество страниц
                        // Если номер страницы оказался больше количества страниц
                        if ($page > $pages_count) $page = $pages_count;
                        $start_pos = ($page - 1) * $perpage; // Начальная позиция, для запроса к БД
                        // Вызов функции, для вывода ссылок на экран
                        
                        yandex_link_bar($page, $count, $pages_count, 10);
                        
                        // Вывод информации из базы данных
                        // echo '<p><b>Постраничный вывод информации</b></p>';
                        // $result = mysql_query('select * from table limit '.$start_pos.', '.$perpage) or die('error!');
                        // while ($row = mysql_fetch_array($result)) {
                        // echo '<p>'.$row['some_field'].'</p>';
                        // }

                        $sql = "SELECT * FROM `news` WHERE 1 ORDER BY `id` DESC LIMIT $start_pos, $perpage";
                        $result = $mysqli->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            if ($row['type'] == '') {
                                $class = 'withoutImg';
                            } else {
                                $class = 'withImg';
                            }
                            echo '<div class="news-item '.$class.'">
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
                    <?php
                        // $result = $mysqli->query("SELECT * FROM `news` WHERE 1 ORDER BY `id` DESC LIMIT 10");
                        // while ($row = $result->fetch_assoc()) {
                        //     if ($row['type'] == '') {
                        //         $class = 'withoutImg';
                        //     } else {
                        //         $class = 'withImg';
                        //     }
                        //     echo '<div class="news-item '.$class.'">
                        //             <div class="news__img" style="background-image: url(news-files/'.$row['file'].')">
                        //             </div>
                        //             <div class="news__info">
                        //                 <div class="news__date">
                        //                     <div><img src="../img/icons/calendar.png"></div>
                        //                     <p>'.$row['date'].'</p>
                        //                 </div>
                        //                 <h3 class="news__title">
                        //                     '.$row['title'].'
                        //                 </h3>
                        //                 <p class="news__text">
                        //                     '.substr($row['text'], 0, 30).'...
                        //                 </p>
                        //                 <div class="btn-wrapper">
                        //                     <a href="newsItem.php?id='.$row['id'].'" class="btn">Читать далее</a>
                        //                 </div>
                        //             </div>
                        //         </div>';
                        // }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once '../templates/footer.php';
    ?>
</body>
</html>