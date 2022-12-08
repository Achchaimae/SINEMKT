<?php
//login controller
include 'Model/LoginModel.php';

echo "login controller";

class LoginController {
    protected $login;
    public function __construct(){
        $this->login = new LoginModel();
    }
    public function checkLogin($login,$password){
        $this->login->checkLogin($login,$password);
    }
}