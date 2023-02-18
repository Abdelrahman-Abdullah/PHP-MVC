<?php
return [
    'database' => [
        'connection' => 'mysql:host=localhost',
        'dbname' => 'phpmvc',
        'username' => 'root',
        'password' =>'',
        'option' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];