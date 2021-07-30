<?php

return [
    'name' => 'One Onco',
    'manifest' => [
        'name' => env('APP_NAME', 'One Onco'),
        'short_name' => 'One Onco',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '72x72' => [
                'path' => '/images/oneonco_icon.jpg',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/images/oneonco_icon.jpg',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/images/oneonco_icon.jpg',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/oneonco_icon.jpg',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/images/oneonco_icon.jpg',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/images/oneonco_icon.jpg',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/images/oneonco_icon.jpg',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/oneonco_icon.jpg',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/splash-640x1136.png',
            '750x1334' => '/images/icons/splash-750x1334.png',
            '828x1792' => '/images/icons/splash-828x1792.png',
            '1125x2436' => '/images/icons/splash-1125x2436.png',
            '1242x2208' => '/images/icons/splash-1242x2208.png',
            '1242x2688' => '/images/icons/splash-1242x2688.png',
            '1536x2048' => '/images/icons/splash-1536x2048.png',
            '1668x2224' => '/images/icons/splash-1668x2224.png',
            '1668x2388' => '/images/icons/splash-1668x2388.png',
            '2048x2732' => '/images/icons/splash-2048x2732.png',
        ],
        'shortcuts' => [
            [
                'name' => 'One Onco',
                'description' => 'One Onco',
                'url' => '/',
                'icons' => [
                    "src" => "/images/oneonco_icon.jpg",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'One Onco',
                'description' => 'One Onco',
                'url' => '/'
            ]
        ],
        'custom' => []
    ]
];
