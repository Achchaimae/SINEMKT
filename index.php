<?php
//define("PROJ_DIR", dirname(__FILE__));

include ('Controller/productController.php');
require_once 'Controller/LoginController.php';

require_once 'Model/ProduitModel.php';
require_once 'Model/LoginModel.php';

$ProduitController = new prodController();
$LoginModel = new LoginModel();
$loginController = new LoginController;

if(isset($_GET["a"])){
    if($_GET["a"]=="log"){
        $loginController->logout();
        require_once 'View/home.php';
    }
}

//test login
 if(isset($_POST["email"])&&isset($_POST["password"])){
//     echo "inside";
session_start();
   $login = $_POST["email"];
   $password = $_POST["password"];
   $loginController->direction($login,$password);
  if($loginController==true){
    $_SESSION["login"] = $login;
    header("location:View/admin.php");
        //   include_once "View/admin.php";
    }else{
             include_once "View/home.php";
    }
}else{
    include_once "View/home.php";
}
    





//login

    
    
 
    // var_dump($_POST);
    // var_dump($_SESSION);
  
    //ajouter
    if(isset($_POST["ajouter"])){   
        $test = new prodController();  
        $nom = $_POST["nom"];
        $prix = $_POST["prix"];
        $quantite = $_POST["quantite"];
        $description = $_POST["description"];
        $image= $test->addPic();
        $ProduitController->AjouterProduit($nom,$prix,$quantite,$description,$image);
       require_once 'View/admin.php';
   }
    //update
    if(isset($_POST["update"])){
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $prix = $_POST["prix"];
        $quantite = $_POST["quantite"];
        $description = $_POST["description"];
        $image = $_POST["image"];
    $ProduitController->updateproduit($id,$nom,$prix,$quantite,$description,$image);
    require_once 'View/admin.php';
    
    }
    //delete
    
    if(isset($_GET["delete"])){
        echo "delete";
        $id = $_GET["id"];
        $ProduitController->deleteproduit($id);
        require_once 'View/admin.php';
        
    }

   
   
     require 'View/home.php';

//login
    

 


