<?php

return [
    'errors' => [
        'logger' => [
            'name' => 'app',
            'path' =>  __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ]
    ],
];
