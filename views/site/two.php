<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "Домашнее задание 2";
$description = "Домашнее задание 2";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';
?>
<div class="section-heading-wrap">
    <div class="entry-header">
        <h2 id="featured-heading" class="section-title entry-title">
            Домашнее задание 2
        </h2>
    </div>
</div>
<div id="home_post">
    <h2>Задача 1:</h2>
    <?php
    file_put_contents(ROOT . '/test.txt', '12345');
    if(is_file(ROOT . '/test.txt'))
        echo 'Файл test.txt создан и записан текст 12345';
    else
        echo 'Файл test.txt не создан в корне сайта';
    ?><br><br>
    <h2>Задача 2:</h2>
    <?php
    file_put_contents(ROOT . '/test2.txt', '12345');
    if(is_file(ROOT . '/test2.txt'))
        echo 'Файл test2.txt создан и записан текст 12345';
    else
        echo 'Файл test2.txt не создан в корне сайта';
    ?><br><br>
    <h2>Задача 3:</h2>
    <?php
    file_put_contents(ROOT . '/new.txt', '');
    if(is_file(ROOT . '/new.txt'))
        echo 'Файл new.txt создан с пустым текстом';
    else
        echo 'Файл new.txt не создан в корне сайта';
    ?><br><br>
    <h2>Задача 4:</h2>
    <?php
    $arr = ['1.txt', '2.txt', '3.txt'];
    foreach ($arr as $value){
        file_put_contents(ROOT . "/$value", '');
        if(is_file(ROOT . "/$value"))
            echo "Файл $value создан с пустым текстом<br>";
        else
            echo "Файл $value не создан с пустым текстом в корне сайта<br>";
    }
    ?><br><br>
    <h2>Задача 5:</h2>
    <?php
    file_put_contents(ROOT . '/test.txt', '!', FILE_APPEND);
    echo 'В файл test.txt добавлен !';
    ?><br><br>
    <h2>Задача 6:</h2>
    <?php
    if(is_file(ROOT . '/test.txt'))
        echo 'Файл test.txt лежит в корне сайта';
    else
        echo 'Файл test.txt не лежит в корне сайта';
    ?><br><br>
    <h2>Задача 7:</h2>
    <?php
    $arr = ['1.txt', '2.txt', '3.txt', '4.txt'];
    foreach ($arr as $value) {
        if(is_file(ROOT . "/$value"))
            echo "Файл $value существует<br>";
        else
            echo "Файл $value не существует";
    }
    ?>
</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>
