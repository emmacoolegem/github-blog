<?php

error_reporting(E_ERROR);

return [
    'instagram' => 'emmacoolegem',  
    'linkedin' => 'emma-coolegem-32b72515a',
    'email' => 'emmacoolegem@outlook.com',

    'publishedReviews' => function ($reviews) {
        return array_where($reviews, function ($value, $key) {
            return $value->published == true;
        });
    },

    'genreReviews' => function ($page, $publishedReviews) {
        return array_where($publishedReviews, function ($value, $key) {
            return $value->genre == strtolower($page->title);
        });
    },

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
