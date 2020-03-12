<?php
namespace models;

class News
{
    public function readCsv()
    {
        return file_get_contents(ROOT . '/upload/news.csv');
    }

    public function showNews()
    {
        $csvRows = explode("\n", $this->readCsv());
        $news = [];

        $keys = explode(";", array_shift($csvRows));
        array_pop($keys);

        foreach ($csvRows as $csvRow){
            $row = explode(";", $csvRow);
            $news[] = array_combine($keys, $row);
        }
        return $news;
    }

    public function detailedNews($id)
    {
        $news = $this->showNews();
        $detailedNews[] = null;
        foreach ($news as $key=>$value)
        {
            if ($value['ID'] == $id)
            {
                return $detailedNews = $value;
            }
        }
    }
}