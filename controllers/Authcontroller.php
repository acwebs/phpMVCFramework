<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

/**
 * Class AuthController
 * 
 * @package app\controllers
 */

 class AuthController extends Controller
 {
    public function login(Request $request)
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

     public function register(Request $request)
     {
        if ($request->isPost()) {
            $registerModel = new RegisterModel();
            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->register()) {
                return 'success';
            }
            echo '<pre>';
        var_dump($registerModel->errors);
        echo '<pre>';
        exit;
            return $this->render('signup', [
                'model' => $registerModel
            ]);
        }
        $this->setLayout('auth');
         return $this->render('signup');
     }
 }
 

?>