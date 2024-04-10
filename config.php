<?php

return [
    'production' => false,
    'baseUrl' => 'file:///C:/Users/Ardak%20Shalkar/Development/TilJumsarStatic/build_local',
    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'collections' => [ 
        'lessons'=>[
            'sort'=>'lessonOrder'
        ],
        'songs' => [
            
        ],
        'videos'=>[
            'path'=>'{lesson}/videos'
        ]
    ],
];
