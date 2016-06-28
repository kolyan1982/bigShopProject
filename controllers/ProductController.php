<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class ProductController
{

    public function actionView($productId)
    {

        $categories = [];
        $categories = Category::getCategoriesList();

        $product = [];
        $product = Product::getProductById($productId);
        var_dump($product);

        require_once(ROOT . '/views/product/view.php');

        return true;
    }

}

