<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "Финал";
$description = "Финал";
/** ############################################## */

use models\Car;
include ROOT.'/views/layouts/decree/header.php';
?>
<div class="section-heading-wrap">
    <div class="entry-header">
        <h2 id="featured-heading" class="section-title entry-title">
            Финал
        </h2>
    </div>
</div>
<div id="home_post">
    <h2>Задача 1:</h2>
    <?php
    $products = array(
    array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
    array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
    array('name' => PHPLAB, 'price' => '100', 'quantity' => ID_ACCOUNT), //где x – ID вашего аккаунта
    array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
    );

    function Sum($products)
    {
        $arr = [];
        $price = [];
        $quantity = [];
        foreach ($products as $product)
        {
            array_push($price, $product['price']);
            array_push($quantity, $product['quantity']);
        }
        array_push($arr, array_sum($price), array_sum($quantity));
        return $arr;
    }
    $sum = Sum($products);
    debug($sum);
    ?>
    <hr/>

    <h2>Задача 2:</h2>
    <?php
    $digits = array(2, -10, -2, 4, 5, 1, 6, 200, 1.6, 95, ID_ACCOUNT, -ID_ACCOUNT);

    function deleteNegtives(&$digits)
    {
        foreach ($digits as $key=>$value)
            if ($value < 0)
                unset($digits[$key]);
    }
    deleteNegtives($digits);
    debug($digits);
    ?>
    <hr/>

    <h2>Задача 3:</h2>
    <form action="" method="POST">
        <p>Введите имя:<br>
            <input type="text" name="name"><br />
        <p>Ваш пол:<br>
            <input type="radio" name="sex" value="М" /> М <br>
            <input type="radio" name="sex" value="Ж" /> Ж <br>
        <p>Ваш возраст:<br>
            <select name="year">
                <option value="26-30">26-30</option>
                <option value="более 30">более 30</option>
                <option value="менее 20 лет">менее 20 лет</option>
                <option value="20-25">20-25</option>
                <option value="26-30">26-30</option>
                <option value="более 30">более 30</option>
            </select><br /><br />
            <input type="submit" value="Отправить">
    </form>
    <?php
    if(isset($_POST['name']) && isset($_POST['sex']) && isset($_POST['year']))
    {
        $name = strip_tags($_POST['name']);
        $sex = $_POST['sex'];
        $year = strip_tags($_POST['year']);
        echo $sex == 'М' ? "Добро пожаловать, мистер $name!". ".Вам $year лет.": "Добро пожаловать, миссис $name!". ".Вам $year лет.";
    }
    ?>
    <hr/>

    <h2>Задача 4:</h2>
    <?php
    $car1 = new Car(4, 1000, 'green', 4, 5);
    $car2 = new Car(4, 2000, 'red', 4, 6);
    $car3 = new Car(4, 3000, 'white', 4, 7);
    $car4 = new Car(4, 4000, 'black', 4, 8);
    echo Car::A . ', ' . Car::B . ', ' . Car::C;
    ?>
    <hr/>

    <h2>Задача 5:</h2>
    <?php
    $arrStr = array('minsk', 'минск', 'дуртанг');
    foreach ($arrStr as $value)
        echo mb_strtoupper($value) . '<br />';

    foreach ($arrStr as $value)
//        echo ucfirst($value) . '<br />';
        echo mb_convert_case($value, MB_CASE_TITLE, "UTF-8") . '<br />';
    ?>
    <hr/>

    <h2>Задача 6:</h2>
    <?php
    $str = '1234567890' . ID_ACCOUNT;
    $chars2 = array();
    $chars1 = array();
    for ($k = 0; $k < strlen($str); $k++)
    {
        $chars2[] = mb_substr($str, $k++, 2);
    }
    for ($k = 0; $k < strlen($str); $k++)
    {
        $chars1[] = mb_substr($str, $k, 1);
    }

    $chars3 = implode('-', $chars2);

    debug($chars2);
    debug($chars1);
    print_r($chars3);

    ?>
    <hr/>

    <h2>Задача 7:</h2>
    <?php
    echo mktime(0,0,0,11,20,date('Y')) . '<br />';
    echo date('Y-m-d') . ', ' . date('d.m.Y') . ', ' . date('d.m.y') . ', ' . date('H:i:s') . '<br />';
    echo intval((mktime(0,0,0,9, 1, date('Y')) - time()) / 86400) . '<br />';
    ?>
<!--    <form action="" method="POST">-->
<!--        <p>Введите год:<br>-->
<!--            <input type="text" name="date">-->
<!--            <input style="padding: 5px 20px; border-bottom: none" type="submit" value="Выбрать">-->
<!--    </form>-->
    <?php
    echo date('l', strtotime("115 days ago"));
    ?>
    <hr/>

<!--    <h2>Задача 8:</h2>-->
<!--    --><?php
//    $str = '1,2,3,4,5,6,7,8,9';
//    foreach ($str as $item=>$value)
//        echo $str[$item] . $value . '<br />';
//    ?>
<!--    <hr/>-->

    <h2>Задача 9:</h2>
    <?php
    $array = array(1, 0, 6, ID_ACCOUNT, 9, 4, 5, 2, 3, 8, 7);
    $array_length = count($array) - 1;
    for ($i = 0; $i < $array_length; $i++)
    {
        for ($j = 0; $j < $array_length - $i; $j++)
        {
            if ($array[$j] > $array[$j + 1])
            {
                $buf = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $buf;
            }
        }
    }
    debug($array);
    ?>
    <hr/>

<!--    <h2>Задача 10:</h2>-->
<!--    --><?php
//    $question = array(
//        'Вопрос 1' => array('Ответ 1','Ответ 2','Ответ 3'),
//        'Вопрос 2' => array('Ответ 1','Ответ 2','Ответ 3'),
//        'Вопрос 3' => array('Ответ 1','Ответ 2','Ответ 3','Ответ 4'),
//    );
//    $answer = array(
//        'Вопрос 1' => 'Ответ 1',
//        'Вопрос 2' => array('Ответ 1', 'Ответ 2'),
//        'Вопрос 3' => 'Ответ 3',
//    );
//    ?>
<!--    <form action="" method="POST">-->
<!--        <b>Какой из нижеперечисленных симптомов характерен коронавирусу?</b><br>-->
<!--        <input type="radio" name="answer" value="Температура" /> Температура <br>-->
<!--        <input type="radio" name="answer" value="Боль в левой ноге" /> Боль в левой ноге <br>-->
<!--        <input type="radio" name="answer" value="Боль в правой руке" /> Боль в правой руке <br>-->
<!--        <input type="submit" disabled value="Далее">-->
<!--    </form>-->
<!--    <hr/>-->

<!--    <h2>Задача 11:</h2>-->
<!--    --><?php
//    echo preg_replace('/(\w)((\w+)(\1))\s/','t','wworld world world');
//    ?>
<!--    <hr/>-->

    <h2>Задача 13:</h2>
    <?php
    $policeman1 = new \models\Policeman('Иван', 25, 1000, 3);
    $policeman2 = new \models\Policeman('Вася', 26, 2000, 5);
    echo 'Сумма зарплат = ' . ($policeman1->getSalary() + $policeman2->getSalary());
    ?>
    <hr/>

    <h2>Задача 14:</h2>
    <?php
    $person1 = new \models\Person('Дима', 25);
    $person2 = new \models\Person('Сергей', 26);
    $person3 = new \models\Person('Саша', 27);
    $policeman3 = new \models\Policeman('Коля', 28, 3000, 7);
    $city1 = new \models\City('Брест', 300000);
    $city2 = new \models\City('Минск', 2000000);
    $city3 = new \models\City('Гродно', 400000);
    $arr = [$person1, $person2, $person3, $policeman1, $policeman2, $policeman3, $city1, $city2, $city3];
    shuffle($arr);
    foreach ($arr as $item=>$value)
    {
        if ($value instanceof \models\Person)
            echo $value->getName() . '<br />';
    }
    ?>
</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>
