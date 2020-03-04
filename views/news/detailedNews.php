<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
/** @var array $news */
$title = "{$news['TITLE']}";
$description = "{$news['TITLE']}";
/** ############################################## */

include ROOT . '/views/layouts/decree/header.php';
?>
<article id="post-<?= $news['ID'] ?>" class="hentry hentry-wide">
    <div class="entry-container">
        <header class="entry-header">
            <h1 class="entry-title"><?= $news['TITLE'] ?></h1>
            <p class="entry-meta">
                <span class="posted-on">
                    <time class="entry-date published"><?= $news['DATE'] ?></time>
                </span>
            </p>
        </header>
        <div class="entry-content">
            <p><?= $news['DETAIL_TEXT'] ?></p>
        </div>
    </div>
</article>

<? include ROOT . '/views/layouts/decree/footer.php';?>
