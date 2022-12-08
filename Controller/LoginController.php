<?php
//login controller

include 'Model/LoginModel.php';


class LoginController extends LoginModel {
    

    public function direction($login,$password){
        $log = new LoginModel();
        $results=$this->checkLogin($login,$password);
        
        if(!$results){
            header('location: View/login.php');
        }
        else{
            header('location: View/admin.php');
        }
    }
}