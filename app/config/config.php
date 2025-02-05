<?php
return [
    'database' => [
        'host' => getenv('DB_HOST'),
        'name' => getenv('DB_NAME'),
        'user' => getenv('DB_USER'),
        'password' => getenv('DB_PASSWORD'),
    ],
    'app' => [
        'env' => getenv('APP_ENV'),
    ],
];