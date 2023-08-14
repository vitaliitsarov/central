<?php

return [
    'central_database' => [
        'driver' => 'pgsql',
        'url' => env('DATABASE_CENTRAL_URL'),
        'host' => env('DB_CENTRAL_HOST', '127.0.0.1'),
        'port' => env('DB_CENTRAL_PORT', '5432'),
        'database' => env('DB_CENTRAL_DATABASE', 'forge'),
        'username' => env('DB_CENTRAL_USERNAME', 'forge'),
        'password' => env('DB_CENTRAL_PASSWORD', ''),
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
    ],
];
