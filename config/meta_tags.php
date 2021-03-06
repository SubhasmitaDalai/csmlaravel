<?php 
[
    /*
     * Meta title section
     */
    'title' => [
        'default' => env('APP_NAME'),
        'separator' => '-',
        'max_length' => 255,
    ],

    /*
     * Meta description section
     */
    'description' => [
        'default' => null,
        'max_length' => 255,
    ],

    /*
     * Meta keywords section
     */
    'keywords' => [
        'default' => null,
        'max_length' => 255
    ],

    'charset' => 'utf-8',
    'robots' => null,
    // 'viewport' => Viewport::RESPONSIVE,
    'csrf_token' => true,
]
 ?>