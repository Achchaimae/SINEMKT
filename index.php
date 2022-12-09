<?php
//define("PROJ_DIR", dirname(__FILE__));

// include ('Controller/productController.php');
require_once 'Controller/LoginController.php';
require_once 'Model/ProduitModel.php';
require_once 'Model/LoginModel.php';

// $ProduitController = new prodController();
$LoginModel = new LoginModel();
$loginController = new LoginController;


//test login
if(isset($_POST["email"])&&isset($_POST["password"])){
    echo "inside";
    $login = $_POST["email"];
    $password = $_POST["password"];
    $loginController->direction($login,$password);
    if($loginController==true){
        echo "login success";
        include_once "View/admin.php";
    }
       // password correct

    //    $_SESSION["login"] = $login;
    //    $_SESSION["password"] = $password;
    //    include_once "View/admin.php";
}
    else{
            echo "login failed";
             include_once "View/home.php";
    }


require 'View/home.php';


//login

 
 

//     //ajouter
//     if(isset($_POST["ajouter"])&& isset($_SESSION["login"])&& isset($_SESSION["password"])){
//         $nom = $_POST["nom"];
//         $prix = $_POST["prix"];
//         $quantite = $_POST["quantite"];
//         $description = $_POST["description"];
//         $image = $_POST["image"];
//         $ProduitController->AjouterProduit($nom,$prix,$quantite,$description,$image);
//        require_once 'View/admin.php';
//    }
//     //update
//     if(isset($_POST["update"])&& isset($_SESSION["login"])&& isset($_SESSION["password"])){
//         $id = $_POST["id"];
//         $nom = $_POST["nom"];
//         $prix = $_POST["prix"];
//         $quantite = $_POST["quantite"];
//         $description = $_POST["description"];
//         $image = $_POST["image"];
//     $ProduitController->updateproduit($id,$nom,$prix,$quantite,$description,$image);
//     require_once 'View/admin.php';
//     }
//     //delete
//     if(isset($_GET["delete"])&& isset($_SESSION["login"])&& isset($_SESSION["password"])){
//         $id = $_GET["id"];

//         $ProduitController->deleteproduit($id);
//         require_once 'View/admin.php';
        
//     }

   



//login
    

 


