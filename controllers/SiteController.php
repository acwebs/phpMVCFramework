<?php
namespace app\controllers;

/**
 * Class SiteController
 * 
 * @package app\controllers
 */

 class SiteController 
 {
     public function contact()
     {
         return Application::$app->router->renderView('contact');
     }
     public function handleContact()
     {
         return 'handling submitted data';
     }
 }
 

?>