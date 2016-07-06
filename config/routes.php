<?php

//в этом файле происходят настройки маршрутов, которые будет принимать router в виде массива

return [
    //Образец: 'Запрос' => 'NameController/actionName'

    'product/([0-9]+)' => 'product/view/$1',
    'catalog' => 'catalog/index',
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //actionCategory in CatalogController
    'category/([0-9]+)' => 'catalog/category/$1',

    'user/register' => 'user/register',

    ''=>'site/index', //путь будет загружать главную страницу

];

