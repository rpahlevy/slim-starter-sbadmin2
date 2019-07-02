<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('[/]', function(Request $request, Response $response, array $args) {
    return \App\Controllers\TestController::test($this, $request, $response, $args);
});
