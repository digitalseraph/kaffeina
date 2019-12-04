<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Custom configuration for Kaffeina application
    |--------------------------------------------------------------------------
    |
    | These are custom configuration values used for the Kaffeina application
    |
    */
    'settings' => [
        'caffeine_expiration_time' => env('KAFFEINA_CAFFEINE_EXPIRATION_TIME', 6)
    ],

    /*
    |--------------------------------------------------------------------------
    | Design Configuration
    |--------------------------------------------------------------------------
    |
    | Contains design configuration values including:
    |   * Color Palette
    |   * Logos
    |
    */
    'design' => [
        'palette' => [
            'dark_tan'   => '#DB7D58',
            'bright_tan' => '#FBAB60',
            'blue'       => '#5A609F',
            'light_gray' => '#FADDD9',
            'dark_gray'  => '#636B6F',
            'off_white'  => '#FAE9D6'
        ],
        'logo' => [
            'lg'       => 'logo_400x144.png',
            'lg_trans' => 'logo_400x144_trans.png',
            'nav'      => 'logo_cup_38x30_trans.png'
        ]
    ],


    /*
    |--------------------------------------------------------------------------
    | Development Configuration
    |--------------------------------------------------------------------------
    |
    | Contains development configuration values including:
    |   * Seeder amounts
    |
    */
    'dev' => [
        'create_test_user' => env('KAFFEINA_CREATE_TEST_USER', FALSE),
        'create_default_beverages' => env('KAFFEINA_DEV_SEED_BEVERAGE_DEFAULTS', FALSE),
        'seeds' => [
            'beverages' => env('KAFFEINA_DEV_SEED_BEVERAGE_AMOUNT', 0),
            'users'     => env('KAFFEINA_DEV_SEED_USER_AMOUNT', 0),
],
        'test_user' => [
            'name' => env('KAFFEINA_TEST_USER_NAME', "Kara Thrace"),
            'email' => env('KAFFEINA_TEST_USER_EMAIL', "demo@kaffeina.test"),
            'password' => env('KAFFEINA_TEST_USER_PASSWORD', "secret"),
            'max_caffeine_amount' => env('KAFFEINA_TEST_USER_MAX_CAFFEINE_AMT', 500),
        ]
    ]
];
