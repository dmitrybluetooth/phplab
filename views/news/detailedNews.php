<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
/** @var array $detailedNews */
$title = "{$detailedNews['TITLE']}";
$description = "{$detailedNews['TITLE']}";
/** ############################################## */
include ROOT . '/views/layouts/decree/header.php';
?>
<article id="post-<?= $detailedNews['ID'] ?>" class="hentry hentry-wide">
    <div class="entry-container">
        <header class="entry-header">
            <h1 class="entry-title"><?= $detailedNews['TITLE'] ?></h1>
            <p class="entry-meta">
                <span class="posted-on">
                    <time class="entry-date published"><?= date('Y-m-d', strtotime($detailedNews['DATE'])) ?></time>
                </span>
            </p>
        </header>
        <div class="entry-content">
            <p><?= str_replace(['#SITE_NAME#', '#NAME#', '#PARAM#'], ['PHPLAB', 'DMITRY', 'Доп. текст'], $detailedNews['DETAIL_TEXT']) ?></p>
        </div>
    </div>
</article>

<? include ROOT . '/views/layouts/decree/footer.php';?>
