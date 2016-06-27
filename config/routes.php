<?php

//в этом файле происходят настройки маршрутов, которые будет принимать router в виде массива

return [
    //Образец: 'Запрос' => 'NameController/actionName'

    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',
    'products' => 'product/list'
];

