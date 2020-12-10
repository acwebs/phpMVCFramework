<?php

/**
 * Class m0001_initial
 *
 * @author Andres Cordoba <andrescordoba010@gmail.com>
 * 
 */

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

require_once __DIR__.'/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD']
    ],
];

$app = new Application(__DIR__, $config);


$app->db->applyMigrations();