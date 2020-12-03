<?php
namespace app\models;

use app\core\Model;
use app\core\Request;

/**
 * Class RegisterModel
 * 
 * @package app\models
 */

 class RegisterModel extends Model
 {
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $passwordConfirm;

    public function register()
    {
        echo 'creating new user';
    }
 }
 

?>