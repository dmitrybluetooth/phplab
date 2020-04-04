<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
/** @var string $redirect */

$title = "Авторизация";
$description = "Авторизация";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';
?>
<div class="section-heading-wrap">
    <div class="entry-header">
        <h2 id="featured-heading" class="section-title entry-title">
            Авторизация
        </h2>
    </div>
</div>
<div id="home_post">
    <p style="color: red"><?php echo $str = is_null($str) ? $str : 'Введены неверные данные' ?></p>
    <form action="<?=HOST?>/login" method="POST">
        <input hidden name="redirect" value="<?= $redirect?>">
        <p>Введите логин (email):<br>
        <input name="login" type="email">
        <p>Введите пароль:<br>
        <input name="password" type="password"><br><br>
        <input type="submit" value="Отправить">
    </form>
</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>
