<?php
return [
    'show_warnings' => false,
    'orientation' => 'portrait',
    'defines' => [
        "font_dir"   => storage_path('app/fonts/'),
        "font_cache" => storage_path('app/fonts/'),
        "temp_dir"   => storage_path('app/temp'),
        "chroot"     => base_path(),
    ],
    'font_family' => [
        'urdu' => [
            'normal'      => storage_path('app/fonts/NotoNaskhArabic-Regular.ttf'),
            'bold'        => storage_path('app/fonts/NotoNaskhArabic-Regular.ttf'),
            'italic'      => storage_path('app/fonts/NotoNaskhArabic-Regular.ttf'),
            'bold_italic' => storage_path('app/fonts/NotoNaskhArabic-Regular.ttf'),
        ],
    ],
];
