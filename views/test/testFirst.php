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
            Вопрос 1
        </h2>
    </div>
</div>
<div id="home_post">

    <?php
//    session_start(); есть уже в /index.php
    $_SESSION['test'] = [];
    ?>

    <form action="<?=HOST?>/testTwo" method="POST">
        <b>Какой из нижеперечисленных симптомов характерен коронавирусу?</b><br>
            <input type="radio" name="answer" value="Температура" /> Температура <br>
            <input type="radio" name="answer" value="Боль в левой ноге" /> Боль в левой ноге <br>
            <input type="radio" name="answer" value="Боль в правой руке" /> Боль в правой руке <br>
            <input type="submit" disabled value="Далее">
    </form>
</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>
