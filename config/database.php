<?php

return [
    'default' => env('DEFAULT_DB_CONNECTION'),
    'migrations' => 'migrations',
    'connections' => [
        'db' => [
            'driver'    => env('DB_CONNECTION'),
            'host'      => env('OLD_DB_HOST'),
            'port'      => env('OLD_DB_PORT'),
            'database'  => env('OLD_DB_DATABASE'),
            'username'  => env('OLD_DB_USERNAME'),
            'password'  => env('OLD_DB_PASSWORD'),
        ]
    ]
];
