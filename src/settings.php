<?php

// load .env
$dotenv = new Dotenv\Dotenv(__DIR__ .'/../');
$dotenv->load();

return [
    'settings' => [
        'displayErrorDetails' => !$_ENV['APP_ENV'] || $_ENV['APP_ENV'] != 'production' ? true : false,
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        'debugMode' => $_ENV['APP_DEBUG'] ? true : false,

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
			'cache_path' => !$_ENV['APP_ENV'] || $_ENV['APP_ENV'] != 'production' ? '' : __DIR__ . '/../cache/'
        ],

        // Monolog settings
        'logger' => [
            'name' => 'app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // Database
        'db' => [
			'connection' => $_ENV['DB_CONNECTION'],
			'host' => $_ENV['DB_HOST'],
			'port' => $_ENV['DB_PORT'],
			'database' => $_ENV['DB_DATABASE'],
			'username' => $_ENV['DB_USERNAME'],
			'password' => $_ENV['DB_PASSWORD'],
        ],
    ],
];
