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

    public function actionTwo()
    {
        require_once(ROOT . '/views/site/two.php');
        return true;
    }

    public function actionShowNews($id)
    {
        $csv = file_get_contents(ROOT . '/upload/news.csv');
        $csvRows = explode("\n", $csv);
        $res = [];
//        echo '<pre>';
//        print_r($csvRows);

        $keys = explode(";", array_shift($csvRows));
        array_pop($keys);
//        $idKey = array_search('ID',$keys);
//        print_r($idKey);
//        print_r($keys);
//        print_r($csvRows);

        foreach ($csvRows as $csvRow){
            $row = explode(";", $csvRow);
//            print_r($row);
            $res[] = array_combine($keys, $row);
//            foreach ($row as $key=>$value){
//                $res[$row[0]][$keys[$key]] = $value;
//                $res[$idKey][$keys[$key]] = $value;
//            };
        }
//        print_r($res);

        if(!empty($id)){
            $news = $res[--$id];
//            print_r($news);
            require_once(ROOT . '/views/news/detailedNews.php');
            return true;
//            echo '</pre>';
        }
        else {
            require_once(ROOT . '/views/news/showNews.php');
            return true;
        }
    }


    public function action404()
    {
        require_once(ROOT . '/views/site/404.php');
        return true;
    }
}