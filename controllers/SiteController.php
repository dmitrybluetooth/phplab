<?php
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


    public function action404()
    {
        require_once(ROOT . '/views/site/404.php');
        return true;
    }
}