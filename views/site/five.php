<?
/** ############################################## */

/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */

$title = "Домашнее задание 5";
$description = "Домашнее задание 5";
/** ############################################## */

/** Задача 5 */
$counter5 = isset($_COOKIE["Task5"]) ? $_COOKIE["Task5"] + 1 : 0;
setcookie("Task5", $counter5, time() + 3600 * 2);


/** Задача 6 */
$counter6 = isset($_COOKIE["Task6"]) ? $_COOKIE["Task6"] + 1 : 0;
setcookie("Task6", $counter6);
setcookie("Time", date("d.m.Y H:i:s"));


/** Задача 7 */
$counter7 = isset($_COOKIE["Task7"]) ? $_COOKIE["Task7"] + 1 : 0;
setcookie("Task7", $counter7);


include ROOT.'/views/layouts/decree/header.php';

use models\User;
?>
<div class="section-heading-wrap">
    <div class="entry-header">
        <h2 id="featured-heading" class="section-title entry-title">
            Домашнее задание 5
        </h2>
    </div>
</div>
<div id="home_post">

    <h4>Задача 1:</h4>
    <form action="" method="POST">
        <p>Введите имя:<br>
            <input type="text" name="userName1"><br><br>
        <input type="submit" value="Отправить">
    </form>
    <?php
    if(isset($_POST['userName1']))
    {
        $name = $_POST['userName1'];
        echo "Привет, {$name}";
    }
    ?>
    <hr/>

    <h4>Задача 2:</h4>
    <form action="" method="POST">
        <p>Введите имя:<br>
            <input type="text" name="userName2"><br>
        <p>Введите возраст:<br>
            <input type="number" name="userAge2"><br>
        <p>Введите сообщение:<br>
            <textarea name="comment2"></textarea><br></p>
            <input type="submit" value="Отправить">
    </form>
    <?php
    if(isset($_POST['userName2']) && isset($_POST['userAge2']) && isset($_POST['comment2']))
    {
        $name = strip_tags($_POST['userName2']);
        $age = $_POST['userAge2'];
        $comment = strip_tags($_POST['comment2']);
        echo "Привет, {$name}, {$age} лет." . "<br>";
        echo "Твое сообщение: {$comment}";
    }
    ?>
    <hr/>

    <h4>Задача 3:</h4>
    <?php if(!isset($_POST["submitData"])): ?>
    <form action="" method="POST">
        <p>Введите возраст:<br>
            <input type="number" name="userAge3"><br><br>
        <input type="submit" name="submitData" value="Отправить">
    </form>
    <?php else: echo "Ваш возраст: {$_POST['userAge3']}"; endif; ?>
    <hr/>

    <h4>Задача 4:</h4>
    <form action="" method="POST">
        <p>Введите имя:<br>
            <input type="text" name="userName4" value="<?=$_REQUEST['userName4'];?>"><br>
        <p>Введите сообщение:<br>
            <textarea name="comment"><?=$_REQUEST['comment'];?></textarea><br></p>
        <input type="submit" value="Отправить">
    </form>
    <hr/>

    <h4>Задача 5:</h4>
    <?php
    echo $counter5 > 0 ? 'С возвращением, друг!' : 'Добро пожаловать, новый пользователь!';
    ?>
    <hr/>

    <h4>Задача 6:</h4>
    <?php
    echo $counter6 > 0 ? 'Последний раз вы посещали эту страницу: ' . $_COOKIE["Time"] : 'Вы посетили эту страницу впервые!';
    ?>
    <hr/>

    <h4>Задача 7:</h4>
    <?php
    echo $counter7 > 0 ? 'Вы посещали эту страницу ' . ($_COOKIE["Task7"] + 1) . ' раз(а)!' : 'Вы посетили эту страницу впервые!';
    ?>
    <hr/>

    <h4>Задача 8:</h4>
    <form action="<?=HOST?>/testFirst" method="POST">
        <input type="submit" value="Пройти тест">
    </form>
    <hr/>

    <h4>Задача 9:</h4>
    <?php
    $user1 = new User('Коля', 30);
    $user2 = new User('Коля', 30);
    print_r( User::compare($user1,$user2) ? 'true' . '<br />' : 'false' . '<br />');

    $user1 = new User('Коля', 30);
    $user2 = new User('Вася', 30);
    print_r( User::compare($user1,$user2) ? 'true' . '<br />' : 'false' . '<br />');

    $user2 = $user1;
    print_r( User::compare2($user1,$user2) ? 'true' . '<br />' : 'false' . '<br />');

    $user2 = new User('Вася', 30);
    print_r( User::compare2($user1,$user2) ? 'true' : 'false');
    ?>
</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>