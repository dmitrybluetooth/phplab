<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
/** @var string $redirect */

$title = "Регистрация";
$description = "Регистрация";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';
?>
<div class="section-heading-wrap">
    <div class="entry-header">
        <h2 id="featured-heading" class="section-title entry-title">
            Регистрация
        </h2>
    </div>
</div>
<div id="home_post">
    <?php
    if(isset($str)):
            echo '<p style="color: green">Спасибо за регистрацию!</p>' .
                'Через 5 секунд Вы будете автоматически перенаправлены на предыдущую страницу.';
    else: ?>
        <form action="<?=HOST?>/register" method="POST">
            <input hidden name="redirect" value="<?= $redirect?>">
            <p>Введите логин (email):<br>
            <input name="login" type="email">
            <p>Введите пароль:<br>
            <input name="password" type="password" minlength="6"><br><br>
            <input type="submit" value="Отправить">
        </form>
    <?php endif?>
</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>
