<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
/** @var string $date */
/** @var object $xml */

$title = "Курсы валют " . $date;
$description = "Курсы валют" . $date;
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';
?>
<style>
    th {
        font-size: 13px;
        background: #903;
        border-color: #b6003d;
        color: #fff;
        font-weight: normal;
        text-align: center;
        vertical-align: middle
    }
    td {
        border: 1px solid #d0c2a5;
        padding: 6px 8px;
        font-size: 14px;
        vertical-align: middle
    }
</style>
<?php if (empty($_SESSION['auth'])): ?>
    <h5>Для просмотра данной страницы необходимо <a style="text-decoration: underline" href="<?=HOST?>/login">авторизоваться</a> !!!</h5>
<?php else: ?>
    <div class="section-heading-wrap">
        <div class="entry-header">
            <h5>
                Официальный курс белорусского рубля по отношению к иностранным валютам,
                устанавливаемый Национальным банком Республики Беларусь ежедневно, на
                <?php echo $date;?>
            </h5>
        </div>
    </div>
    <div id="home_post">
        <form action="" method="POST">
            <p>На дату:<br>
                <input type="date" name="calendar" value="<?= !isset($_POST['calendar']) ? date('Y-m-d') : date('Y-m-d', strtotime($_POST['calendar']))?>">&nbsp;&nbsp;
                <input style="padding: 5px 20px; border-bottom: none" type="submit" value="Выбрать">
        </form>
        <?php
        if (empty($xml)): echo "На $date нет инфы";
        else: ?>
            <table style="width: 60%">
                <thead>
                    <tr>
                        <th>Наименование иностранной валюты</th>
                        <th>Количество единиц иностранной валюты, буквенный код валюты</th>
                        <th>Официальный курс</th>
                    </tr>
                </thead>
                <?php foreach ($xml as $currency): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $currency->Name ?></td>
                            <td><?php echo "$currency->Scale $currency->CharCode" ?></td>
                            <td style="text-align: right"><?php echo $currency->Rate ?></td>
                        </tr>
                    </tbody>
                <?php endforeach;?>
            </table>
        <?php endif;?>
    </div>
<?php endif; ?>

<?include ROOT.'/views/layouts/decree/footer.php';?>

