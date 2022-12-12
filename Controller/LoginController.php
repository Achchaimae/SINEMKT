<?php
//login controller

include 'Model/LoginModel.php';


class LoginController extends LoginModel {
    

    public function direction($login,$password){
        $log = new LoginModel();
        $results=$this->checkLogin($login,$password);
        
        if(!$results){
           return false;
        }
        else{
            return true;
        }
    }
    public function logout(){
        session_start();
        session_destroy();
        
    }
}