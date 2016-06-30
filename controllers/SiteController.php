<?php

require_once ROOT . '/models/Category.php';
require_once ROOT . '/models/Product.php';


class SiteController
{
    public function actionIndex(){
        $categories = [];
        $categories = Category::getCategoriesList();

        $latestProducts = [];
        $latestProducts = Product::getLatestProducts(7);



        require_once ROOT . '/views/site/index.php';
        return true;
    }
}

