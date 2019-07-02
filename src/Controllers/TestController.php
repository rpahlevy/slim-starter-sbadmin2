<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class TestController
{
    public static function test($app, Request $request, Response $response, array $args=[])
    {
        return $app->view->render($response, 'template.html');
    }
}