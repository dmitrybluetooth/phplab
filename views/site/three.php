<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "Домашнее задание 3";
$description = "Домашнее задание 3";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';
?>
<div class="section-heading-wrap">
    <div class="entry-header">
        <h2 id="featured-heading" class="section-title entry-title">
            Домашнее задание 3
        </h2>
    </div>
</div>
<div id="home_post">
    <h2>Задачи на даты:</h2>
    <?php
    echo mktime(12, 58,59, 9, 23, 2031).'<br>';
    echo time() - mktime(7, 25, 59, 9, 1, 2010).'<br>';
    echo date("Y.m.d H:i:s").'<br>';
    echo date("Y.09.01").'<br>';
    echo date('l', mktime(0, 0, 0, 9, 01, 2010)).'<br>';

    $dateArr = explode('-', '31-12-2025');
    echo mktime('0', '0', '0', "$dateArr[1]", "$dateArr[0]", "$dateArr[2]").'<br>';

    echo date('d-m-Y', strtotime('2025-12-31'));
    ?><br><br>

    <h2>Задачи на регулярные выражения:</h2>
    <?php

    echo preg_replace('/a.b/', 'a!b', 'ahb acb aeb aeeb adcb axeb');
    echo  '<hr />';

    echo preg_replace('/(a..a)/','$1','aba aca aea abba adca abea');
    echo  '<hr />';

    echo preg_replace('/(ab*a)/','${1}','aa aba abba abbba abca abea');
    echo  '<hr />';

    echo preg_replace('/(ab)+/','$1','ab abab abab abababab abea');
    echo  '<hr />';

    echo preg_replace('/(2\+3)(.+)/', '${1}', '2+3 223 2223');
//    echo strstr(preg_replace('/(2\+3)/', '${1}', '2+3 223 2223'), ' ', true);
    echo  '<hr />';

    echo preg_replace('/(2\+*3) (\d+) (\d+)/', '$1', '23 2+3 2++3 2+++3 445 677');
//    echo strstr(preg_replace('/(2\+*3)/', '${1}', '23 2+3 2++3 2+++3 445 677'), '445', true);

    echo  '<hr />';

    ?><br><br>

</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>
