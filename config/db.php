<?php

return [
    'host' => 'mysql',
    'port' => 3306,
    'dbname' => 'my_blog',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8mb4',
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        //PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
];