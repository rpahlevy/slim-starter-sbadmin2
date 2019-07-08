<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('[/]', '\App\Controllers\TestController:test');

$app->get('/login', '\App\Controllers\AuthControllers\LoginController:login')->setName('login');
$app->get('/logout', '\App\Controllers\AuthControllers\LoginController:logout')->setName('logout');
$app->get('/profile/{name}', function(Request $request, Response $response, array $args) {
    return isset($args['name']) ? $args['name'] : 'Anonn';
})->setName('profile');
