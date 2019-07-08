<?php

$container = $app->getContainer();

$env = new Twig_SimpleFunction('env', function ($key, $default) {
	return isset($_ENV[$key]) ? $_ENV[$key] : $default;
});
$asset = new Twig_SimpleFunction('asset', function ($path) {
	return $_ENV['APP_URL'] .'/'. $path;
});

$container->get('view')->getEnvironment()->addFunction($env);
$container->get('view')->getEnvironment()->addFunction($asset);