<?php

return [
    "name" => "Ligue Mogi",
    'manifest' => [
        'name' => env('Ligue Mogi', 'Ligue Mogi'),
        'short_name' => 'Ligue Mogi',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'icons' => [
            '72x72' => '/image/logo1.png',
            '96x96' => '/image/logo1.png',
            '128x128' => '/image/logo1.png',
            '144x144' => '/image/logo1.png',
            '152x152' => '/image/logo1.png',
            '192x192' => '/image/logo1.png',
            '384x384' => '/image/logo1.png',
            '512x512' => '/image/logo1.png'
        ],
        'splash' => [
            '640x1136' => '/image/logo.png',
            '750x1334' => '/image/logo.png',
            '828x1792' => '/image/logo.png',
            '1125x2436' => '/image/logo.png',
            '1242x2208' => '/image/logo.png',
            '1242x2688' => '/image/logo.png',
            '1536x2048' => '/image/logo.png',
            '1668x2224' => '/image/logo.png',
            '1668x2388' => '/image/logo.png',
            '2048x2732' => '/image/logo.png',
        ],
        'custom' => []
    ]
];
