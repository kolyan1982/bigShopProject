<?php

class Product
{

    /*
     * quantity blocks
     * */
    const SHOW_BY_DEFAULT = 10;

    public static function getLatesProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = (int)$count;
        $db = Db::getConnection();

        $productList = [];

        $sql = "SELECT id, name, price, image, is_new FROM products "
            . "WHERE status='1' "
            . "ORDER BY id DESC "
            . "LIMIT " . $count;
        $result = $db->query($sql);
        $db->query($sql) or die('Ошибка в запросе');

        $i = 0;

        while ($row = $result->fetch()) {

            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['image'] = $row['image'];
            $productList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productList;

    }


    public static function getProductsListByCategory($categoryId = false)
    {
        if ($categoryId) {

            $db = Db::getConnection();

            $products = [];

            $sql = "SELECT id, name, price, image, is_new FROM products "
                . "WHERE status='1' AND category_id = '$categoryId' "
                . "ORDER BY id DESC "
                . "LIMIT " . self::SHOW_BY_DEFAULT;
            $result = $db->query($sql);
            $db->query($sql) or die('Ошибка в запросе');

            $i = 0;

            while ($row = $result->fetch()) {

                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }
            return $products;

        }

    }

    /**
     * Returns product item by id
     * @param integer $id
     */
    public static function getProductById($id)
    {
        $id = (int)$id;

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM products WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result->fetch();
        }
    }



}

