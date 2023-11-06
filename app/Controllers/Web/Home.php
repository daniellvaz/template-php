<?php

namespace App\Controllers\Web;

use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Home
{
  public function index(Request $req, Response $res) 
  {
    $view = Twig::fromRequest($req);
    
    return $view->render($res, 'index.html', [
      "title" => "Template"
    ]);
  }

  public function forgot(Request $req, Response $res)
  {
    $view = Twig::fromRequest($req);
    return $view->render($res, 'forgot.html');
  }
}