<?php

return [
    'mode'                  => 'utf-8',
    'format'                => 'A4',
    'author'                => '',
    'subject'               => '',
    'margin_left'           => 1,
    'margin right'           => 1,
    'margin top'           => 1,
    'keywords'              => '',
    'creator'               => 'Laravel Pdf',
    'display_mode'          => 'fullpage',
    'tempDir'               => base_path('../temp/'),

    'font_path' => base_path('/public/pdf_fonts/'),
    'font_data' => [
        'bangla' => [
            'R'  => 'Nirmala.ttf',    // regular font
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ]
    ]

];
