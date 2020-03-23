<?
/** ############################################## */

use models\WorkerOne;
use models\WorkerTwo;

/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */

$title = "Домашнее задание 4";
$description = "Домашнее задание 4";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';
?>
<div class="section-heading-wrap">
    <div class="entry-header">
        <h2 id="featured-heading" class="section-title entry-title">
            Домашнее задание 4
        </h2>
    </div>
</div>
<div id="home_post">
    <h4>Задача 1:</h4>
    <?php

    $object1 = new WorkerOne();
    $object1->name = 'Иван';
    $object1->age = 25;
    $object1->salary = 1000;

    $object2 = new WorkerOne();
    $object2->name = 'Вася';
    $object2->age = 26;
    $object2->salary = 2000;

    $sumSalary = $object1->salary + $object2->salary;
    $sumAge = $object1->age + $object2->age;

    echo "Сумма зарплат Ивана и Васи: {$object1->salary} + {$object2->salary} = " . $sumSalary . '<br>';
    echo "Сумма возрастов Ивана и Васи: {$object1->age} + {$object2->age} = " . $sumAge . '<hr>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

    echo '<h4>' . 'Задача 2:' . '</h4>';

    $object1 = null;
    $object2 = null;

    $object1 = new WorkerTwo();
    $object1->setName('Иван');
    $object1->setAge(25);
    $object1->setSalary(1000);

    $object2 = new WorkerTwo();
    $object2->setName('Вася');
    $object2->setAge(26);
    $object2->setSalary(2000);

    $sumSalary = $object1->getSalary() + $object2->getSalary();
    $sumAge = $object1->getAge() + $object2->getAge();

    echo "Сумма зарплат Ивана и Васи: {$object1->getSalary()} + {$object2->getSalary()} = " . $sumSalary . '<br>';
    echo "Сумма возрастов Ивана и Васи: {$object1->getAge()} + {$object2->getAge()} = " . $sumAge . '<hr>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    echo '<h4>' . 'Задача 3:' . '</h4>';

    $object1 = null;
    $object2 = null;

    $object1 = new \WorkerThree();
    $object1->setName('Иван');
    $object1->setAge(25);
    $object1->setSalary(1000);
    $object1->setAge(101);

    $object2 = new \WorkerThree();
    $object2->setName('Вася');
    $object2->setAge(26);
    $object2->setSalary(2000);
    $object2->setAge(101);

    $sumSalary = $object1->getSalary() + $object2->getSalary();
    $sumAge = $object1->getAge() + $object2->getAge();

    echo "Сумма зарплат Ивана и Васи: {$object1->getSalary()} + {$object2->getSalary()} = " . $sumSalary . '<br>';
    echo "Сумма возрастов Ивана и Васи: {$object1->getAge()} + {$object2->getAge()} = " . $sumAge . '<hr>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    echo '<h4>' . 'Задача 4:' . '</h4>';

    $object = new \WorkerFour('Дима', 10000);
    $object->age = 25;
    $compos = $object->age * $object->getSalary();
    echo "Произведение возраста и зарплаты Димы: $object->age * {$object->getSalary()} = " . $compos . '<hr>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    echo '<h4>' . 'Задача 5:' . '</h4>';

    $rectangleOne = new Rectangle(5,6);
    $rectangleOne->infoAbout();
    $rectangleOne->getArea();

    $rectangleTwo = new Rectangle(7,8);
    $rectangleTwo->infoAbout();
    $rectangleTwo->getArea();

    $triangleOne = new Triangle(2,3,4);
    $triangleOne->infoAbout();
    $triangleOne->getArea();

    $triangleTwo = new Triangle(5,6,7);
    $triangleTwo->infoAbout();
    $triangleTwo->getArea();

    $squareOne = new Square(8);
    $squareOne->infoAbout();
    $squareOne->getArea();

    $squareTwo = new Square(9);
    $squareTwo->infoAbout();
    $squareTwo->getArea();

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    echo '<hr><h4>' . 'Задача 6:' . '</h4>';

    $connection = curl_init();
    curl_setopt($connection, CURLOPT_URL,'https://phplab.by/get_curl_value.php?param=get_value');
    echo curl_exec($connection) . '<br>';
    curl_close($connection);

    $connection = curl_init();
    $options = array(CURLOPT_URL => 'https://phplab.by/get_curl_value.php?param=get_value',
                     CURLOPT_POST => 1,
                     CURLOPT_POSTFIELDS => "param=post_value",
                     CURLOPT_RETURNTRANSFER => 1);
    curl_setopt_array($connection, $options);
    echo curl_exec($connection);
    curl_close($connection);

    ?><br><br>
</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>
