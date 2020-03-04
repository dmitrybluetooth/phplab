<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "Домашнее задание 1";
$description = "Домашнее задание 1";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';
?>
<div class="section-heading-wrap">
    <div class="entry-header">
        <h2 id="featured-heading" class="section-title entry-title">
            Домашнее задание 1
        </h2>
    </div>
</div>
<div id="home_post">
    <h2>Задача:</h2>
    <?php
    $var = 5;
    $var += 32;
    $var -= 9;
    $var *= 10;
    $var /= 3;
    $var = $var++ + 7;
    $var = $var-- - 4;

    echo $var;
	?><br><br>
    <h2>Работа с переменными:</h2>
        <ol>
            <li>
                <?php
                $a = 3;
                echo '$a = '.$a;
                ?>
            </li>
            <li>
                <?php
                $a = 4;
                $b = 9;
                echo '$a + $b = '.($a + $b)."<br />";
                echo '$a - $b = '.($a - $b)."<br />";
                echo '$a * $b = '.($a * $b)."<br />";
                echo '$a / $b = '.round($a / $b,2)."<br />";
                ?>
           </li>
           <li>
               <?php
                $c = 21;
                $d = 8;
                $result = $c + $d;
                echo '$result = '.$result;
                ?>
           </li>
            <li>
                <?php
                $a = 4;
                $b = 9;
                $c = 11;
                $result = $a + $b +$c;
                echo '$result = '.$result;
                ?>
            </li>
            <li>
                <?php
                $a = 35;
                $b = 16;
                $c = $a - $b;
                $d = 13;
                $result = $c + $d;
                echo '$result = '.$result;
                ?>
            </li>
        </ol><br>
    <h2>Работа со строками:</h2>
        <ol>
            <li>
                <?php
                $text = 'Привет, Мир!';
                echo $text;
                ?>
            </li>
            <li>
                <?php
                $text1 = 'Привет, ';
                $text2='Мир!';
                echo $text1.$text2;
                ?>
            </li>
            <li>
                <?php
                $name = 'Дмитрий';
                echo "Привет, $name!";
                ?>
            </li>
            <li>
                <?php
                $age = 31;
                echo "Мне, $age год!";
                ?>
            </li>

        </ol>
</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>
