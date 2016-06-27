<?php

class News
{

    //метод возвращает одну новость по id
    public static function getNewsItemById($id)
    {

        $id = (int)$id;

        if($id){

            $db = Db::getConnection();
            $sql = 'SELECT * FROM news WHERE id='.$id;
            $result = $db->query($sql);
            $db->query($sql) or die('Ошибка в запросе!');
            $newsItem = $result->fetch(PDO::FETCH_ASSOC);
            return $newsItem;
        }
    }

    //метод возвращает список новостей
    public static function getNewsList()
    {

        $db = Db::getConnection();
        $newsList = [];
        $sql = 'SELECT id, title, date, short_content FROM news '
                . 'ORDER BY date DESC '
                . 'LIMIT 10';

        $result = $db->query($sql);
        $db->query($sql) or die('Ошибка в запросе!');
        $i = 0;

        while ($row = $result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newsList;
    }
}

