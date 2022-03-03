<!---Ver 1.0.5(02.21.2022)--->
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>Authorization</title>
    <link rel="stylesheet" type="text/css" href="/front/style.css">    <!---CSS--->
</head>

<body>
<div class="header">
    <div class="header_section">
        <a href="/index.html"><article class="item"><div class="photo"><img class="photo2" src="/front/images/zxc-cat.gif" alt=""></div></article></a>
        <div class="header_item1 headerButton"><a href="/back/News.php">News</a></div>
        <div class="header_item1 headerButton"><a href="/back/userNews.php">Suggest news</a></div>
        <div class="header_item1 headerButton"><a href="#">News in anticipation</a></div>
        <div class="header_item1 headerButton"><a href="#">Approved news</a></div>
        <div class="header_item1 headerButton"><a href="#">Personal Area</a></div>
    </div>
    <div class="header_section">
        <div class="header_item1 headerButton"><a href="/back/SignUp.php">Sign up</a></div>
        <div class="header_item1 headerButton"><a href="/back/LogIn.php">Log in</a></div>
    </div>
</div>
<p class = "News">
    <?php
    require('config.php');
    global $conn;
    if (!$conn) {
// Если проверку не прошло, то выводится надпись ошибки и заканчивается работа скрипта
        echo "Не удается подключиться к серверу базы данных!";
        exit;
    }
    // Поверка, есть ли GET запрос
    if (isset($_GET['pageant'])) {
        // Если да то переменной $pageant присваиваем его
        $pageant = $_GET['pageant'];
    } else $pageant = 1;

    // Назначаем количество данных на одной странице
    $size_page = 10;
    // Вычисляем с какого объекта начать выводить
    $offset = ($pageant-1) * $size_page;
    // SQL запрос для получения количества элементов
    $count_sql = "SELECT COUNT(*) FROM `suggestnews`";
    // Отправляем запрос для получения количества элементов
    $result = mysqli_query($conn, $count_sql);
    // Получаем результат
    $total_rows = mysqli_fetch_array($result)[0];
    // Вычисляем количество страниц
    $total_pages = ceil($total_rows / $size_page);

    // Создаём SQL запрос для получения данных
    $sql = "SELECT * FROM `suggestnews` LIMIT $offset, $size_page";
    // Отправляем SQL запрос
    $res_data = mysqli_query($conn, $sql);
    // Цикл для вывода строк
    while($row = mysqli_fetch_array($res_data)){
        // Выводим логин пользователя
        echo $row['title'] . " ";
        echo  $row['text']. '</br>';
    }
    // Закрываем соединение с БД
    mysqli_close($conn);
    ?>
<ul class="pagination">
    <li><a href="?pageant=1">First</a></li>
    <li class="<?php if($pageant <= 1){ echo 'disabled'; } ?>">
        <a href="<?php if($pageant <= 1){ echo '#'; } else { echo "?pageant=".($pageant - 1); } ?>">Prev</a>
    </li>
    <li class="<?php if($pageant >= $total_pages){ echo 'disabled'; } ?>">
        <a href="<?php if($pageant >= $total_pages){ echo '#'; } else { echo "?pageant=".($pageant + 1); } ?>">Next</a>
    </li>
    <li><a href="?pageant=<?php echo $total_pages; ?>">Last</a></li>
</ul>
<script type="text/javascript" src="/front/main.js"></script>  <!---JS--->
</body>
