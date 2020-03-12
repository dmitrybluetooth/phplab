<?php
require_once (ROOT . '/models/news.php');
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