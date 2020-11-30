<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;

/**
 * Class SiteController
 * 
 * @package app\controllers
 */

 class SiteController extends Controller
 {
    public function home()
    {
        $params = [
            'name' => 'Andres the Programmer'
        ];
        return $this->render('home', $params);
    }

     public function contact()
     {
         return $this->render('contact');
     }

     public function handleContact()
     {
         return 'handling submitted data';
     }
 }
 

?>