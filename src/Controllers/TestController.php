<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class TestController extends Controller
{
    public function test($request, $response, $args)
    {
        return $this->view($response, 'template.twig');
    }
}