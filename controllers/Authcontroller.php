<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * Class AuthController
 * 
 * @package app\controllers
 */

 class AuthController extends Controller
 {
    public function login(Request $request)
    {
        
        return $this->render('login');
    }

     public function register(Request $request)
     {
        if ($request->isPost()) {
            return 'handle submited data';
        }
         return $this->render('signup');
     }

    //  public function handleContact(Request $request)
    //  {
    //      $body = $request->getBody();
    //      echo '<pre>';
    //     var_dump($body);
    //     echo '<pre>';
    //     exit;         
    //      return 'handling submitted data';
    //  }
 }
 

?>