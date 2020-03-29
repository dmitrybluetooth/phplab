<?php
require_once(ROOT . '/models/News.php');
require_once(ROOT . '/models/Worker.php');
require_once(ROOT . '/models/User.php');
use models\News;

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


    public function action404()
    {
        require_once(ROOT . '/views/site/404.php');
        return true;
    }
}