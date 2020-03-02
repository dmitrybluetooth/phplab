<?
header('HTTP/1.1 404 Not Found');
header('Status: 404 Not Found');

/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "Ошибка 404";
$description = "Ops! Ошибка 404. На нашем сайте еще нет такой страницы. А пока она не появилась, вы можете перейти на главную страницу сайта и найти там все самое необходимое.";
/** ############################################## */
?>
<?include ROOT.'/views/layouts/decree/header.php';?>
<div class="section-heading-wrap">
    <div class="entry-header">
        <h2 id="featured-heading" class="section-title entry-title">Кажется, вы потерялись!</h2>
    </div>
</div>
<div class="error_404">
    <p>На нашем сайте еще нет такой страницы.</p>
    <p>Возможно, в будущем, британским учёным удастся найти эту страницу :)</p>
    <div class="bnt_home">
        <a href="<?=HOST?>">На главную</a>
    </div>
</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>

