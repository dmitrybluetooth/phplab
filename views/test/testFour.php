<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "Тест";
$description = "Тест";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';
?>
<div class="section-heading-wrap">
    <div class="entry-header">
        <h2 id="featured-heading" class="section-title entry-title">
            Результаты теста
        </h2>
    </div>
</div>
<div id="home_post">
    <?php
    $array = ['Температура', 'Сухой кашель', 'Затрудненное дыхание'];
    if(isset($_POST['answer']))
        array_push($_SESSION['test'], $_POST['answer']);
    for ($i = 0, $j = 1; $i < count($array); $i++, $j++)
        echo ($array[$i] == $_SESSION['test'][$i]) ? $j . '. Верно' . '<br />' : $j . '. Не верно' . '<br />';
    $_SESSION['test'] = null;
//    session_destroy();
    ?>
    <br />
    <form action="<?=HOST?>/testFirst" method="POST">
        <input type="submit" value="Пройти тест заново">
    </form>
</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>
