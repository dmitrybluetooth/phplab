<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
/** @var array $showNews */
$title = "Список новостей";
$description = "Список новостей";
/** ############################################## */

include ROOT . '/views/layouts/decree/header.php';
?>
<div class="section-heading-wrap">
    <div class="entry-header">
        <h2 class="section-title entry-title"><? echo "{$title}";?></h2>
    </div>
</div>
<? if(!empty($showNews)){ ?>
    <? foreach ($showNews as $news){ ?>
    <article id="post-<?= $news['ID'] ?>" class="hentry">
        <div class="archive-post-wrap">
            <figure class="featured-image">
                <a href="/30/news/<?= $news['ID'] ?>/">
                    <img width="480" height="480" src="/30<?= $news['PICTURE'] ?>"> </a>
            </figure>
            <div class="entry-container">
                <header class="entry-header">
                    <h2 class="entry-title"><a href="/30/news/<?= $news['ID'] ?>/"><?= $news['TITLE'] ?></a></h2>
                    <p class="entry-meta">
                            <span class="posted-on">
                                <time class="entry-date published"><?= date('Y-m-d', strtotime($news['DATE'])) ?></time>
                            </span>
                    </p>
                </header>
                <div class="entry-summary">
                    <p><?= substr($news['PREVIEW_TEXT'], 0, 50) ?></p>
                </div>
            </div>
        </div>
    </article>
<? }?>
<? }else{ ?>
    <?='Нет новостей';?>
<? } ?>

<?include ROOT.'/views/layouts/decree/footer.php';?>
