<?php
require_once(ROOT . '/models/News.php');
require_once(ROOT . '/models/Worker.php');
require_once(ROOT . '/models/iUser.php');
require_once(ROOT . '/models/User.php');
require_once(ROOT . '/models/Identity.php');
use models\News;
use models\Identity;


class SiteController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    public function actionFirst()
    {
        require_once(ROOT . '/views/site/first.php');
        return true;
    }

    public function actionTwo()
    {
        require_once(ROOT . '/views/site/two.php');
        return true;
    }

    public function actionThree()
    {
        require_once(ROOT . '/views/site/three.php');
        return true;
    }

    public function actionFour()
    {
        require_once(ROOT . '/views/site/four.php');
        return true;
    }

    public function actionFive()
    {
        require_once(ROOT . '/views/site/five.php');
        return true;
    }

    public function actionTestFirst()
    {
        require_once(ROOT . '/views/test/testFirst.php');
        return true;
    }

    public function actionTestTwo()
    {
        require_once(ROOT . '/views/test/testTwo.php');
        return true;
    }

    public function actionTestThree()
    {
        require_once(ROOT . '/views/test/testThree.php');
        return true;
    }

    public function actionTestFour()
    {
        require_once(ROOT . '/views/test/testFour.php');
        return true;
    }

    public function actionShowNews($id = 0)
    {
        if(intval($id) != 0){
            $_detailedNews = new News();
            $detailedNews = $_detailedNews->detailedNews($id);
            require_once(ROOT . '/views/news/detailedNews.php');
        }
        else {
            $_showNews = new News();
            $showNews = $_showNews->showNews();
            require_once(ROOT . '/views/news/showNews.php');
        }
        return true;
    }

    public function actionRegister()
    {
        if (!empty($_POST['login'] && $_POST['password']))
        {
            $model = new Identity($_POST['login'], $_POST['password']);
            $model->Register();
            $_SESSION['auth'] = true;
            $str = '';
            header("Refresh: 5; URL={$_POST['redirect']}");
        }
        else
            $redirect = $_SERVER['HTTP_REFERER'];
        require_once(ROOT . '/views/site/register.php');
        return true;
    }

    public function actionLogin()
    {
        if (!empty($_POST['login'] or $_POST['password']))
        {
            $model = new Identity($_POST['login'], $_POST['password']);
            $model->Login();
            $redirect = $_POST['redirect'];
            $str = '';
        }
        else
            $redirect = "Location: {$_SERVER['HTTP_REFERER']}";
        require_once(ROOT . '/views/site/login.php');
        return true;
    }

    public function actionLogout()
    {
        $_SESSION['auth'] = null;
        header("Location: {$_SERVER['HTTP_REFERER']}");
        return true;
    }

    public function actionCurrency()
    {
        $date = !isset($_POST['calendar']) ? date('m/d/Y') : date('m/d/Y', strtotime($_POST['calendar']));
        $xml = simplexml_load_file('http://www.nbrb.by/services/xmlexrates.aspx?ondate=' . $date);
        require_once(ROOT . '/views/site/currency.php');
        return true;
    }

    public function action404()
    {
        require_once(ROOT . '/views/site/404.php');
        return true;
    }
}