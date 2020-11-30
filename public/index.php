<?php

require_once __DIR__.'/../vendor/autoload.php';

use app\controllers\SiteController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

//Static class that needs to be initialzed
$siteController = new SiteController();

$app->router->get('/', 'home');
$app->router->get('/contact', [$siteController, 'contact']);
$app->router->post('/contact', [$siteController, 'handleContact']);

$app->run();