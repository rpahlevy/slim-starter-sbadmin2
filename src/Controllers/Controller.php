<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class Controller
{
	protected $app;
	protected $view;
	
	public function __construct($app)
	{
		$this->app = $app;
		$this->view = $app->view;
	}
	
	protected function view($response, $template, array $data=[])
	{
		return $this->view->render($response, $template, $data);
	}
}