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
            Вопрос 2
        </h2>
    </div>
</div>
<div id="home_post">
    <?php
    if(isset($_POST['answer']))
        array_push($_SESSION['test'], $_POST['answer']);
    ?>

    <form action="<?=HOST?>/testThree" method="POST">
        <b>Какой из нижеперечисленных симптомов характерен коронавирусу?</b><br>
            <input type="radio" name="answer" value="Боль в левой ноге" /> Боль в левой ноге <br>
            <input type="radio" name="answer" value="Сухой кашель" /> Сухой кашель <br>
            <input type="radio" name="answer" value="Боль в правой руке" /> Боль в правой руке <br>
            <input type="submit" disabled value="Далее">
    </form>
</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>
