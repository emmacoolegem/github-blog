<?php

error_reporting(E_ERROR);

return [
    'instagram' => 'emmacoolegem',  
    'linkedin' => 'emma-coolegem-32b72515a',
    'email' => 'emmacoolegem@outlook.com',

    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'reviews' => [
            'path' => 'reviews/{-title}',
            'sort' => '-date'
        ],
        'genres' => [
            'path' => 'genres/{-title}',
            'sort' => 'title'
        ]
    ],
];
