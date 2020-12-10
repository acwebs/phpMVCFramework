<?php

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD']
    ],
];

$app = new Application(dirname(__DIR__), $config);

//Static class that needs to be initialzed
$siteController = new SiteController();
$authController = new AuthController();

$app->router->get('/', [$siteController, 'home']);
$app->router->get('/contact', [$siteController, 'contact']);
$app->router->post('/contact', [$siteController, 'handleContact']);

$app->router->get('/login', [$authController, 'login']);
$app->router->post('/login', [$authController, 'login']);
$app->router->get('/register', [$authController, 'register']);
$app->router->post('/register', [$authController, 'register']);

$app->run();