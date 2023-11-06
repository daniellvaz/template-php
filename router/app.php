<?php

use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Controllers\Web\Home;

AppFactory::setSlimHttpDecoratorsAutomaticDetection(false);
ServerRequestCreatorFactory::setSlimHttpDecoratorsAutomaticDetection(false);

$app = AppFactory::create();

$twig = Twig::create(__DIR__ . "/../resources/views", ['cache' => false]);
$app->add(TwigMiddleware::create($app, $twig));

$app->get('/', [Home::class, 'index']);
$app->get('/forgot', [Home::class, 'forgot']);