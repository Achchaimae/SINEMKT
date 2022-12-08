<?php
//define("PROJ_DIR", dirname(__FILE__));

session_start();
require_once 'Controller/ProduitController.php';
require_once 'Controller/LoginController.php';
require_once 'Model/ProduitModel.php';
require_once 'Model/LoginModel.php';

$ProduitController = new ProduitController();
$LoginModel = new LoginModel();
$loginController = new LoginController;


if(isset($_POST["email"])){

    $login = $_POST["email"];
    $password = $_POST["password"];
    
    
     $loginController-> direction($login,$password);
  
    }

// if (isset($_POST["login"])) {
//     $login = $_POST["login"];
//     $password = $_POST["password"];
//     $LoginModel->checkLogin($login, $password);
//     header('location: /View/admin.php');
// }
//login
//  if(isset($_SESSION["login"])){
//      if(($_SESSION["login"] === 'achchaimae1@gmail.com')){
//login
    
// if(isset($_SESSION["login"])){

//    if(isset($_POST["ajouter"])){
//         $nom = $_POST["nom"];
//         $prix = $_POST["prix"];
//         $quantite = $_POST["quantite"];
//         $description = $_POST["description"];
//         $image = $_POST["image"];
//         $ProduitController->AjouterProduit($nom,$prix,$quantite,$description,$image);
//         header('location: View/admin.php');
//     }
//     if(isset($_POST["update"])){
//         $id = $_POST["id"];
//         $nom = $_POST["nom"];
//         $prix = $_POST["prix"];
//         $quantite = $_POST["quantite"];
//         $description = $_POST["description"];
//         $image = $_POST["image"];
//         $ProduitController->updateproduit($id,$nom,$prix,$quantite,$description,$image);
//         header('location: /View/admin.php');
//     }
//     if(isset($_GET["delete"])){
//         $id = $_GET["delete"];
//         $ProduitController->deleteproduit($id);
//         header('location: /View/admin.php');
//     }
//     if(isset($_POST["search"])){
//         $nom = $_POST["nom"];
//         $results = $ProduitController->searchproduit($nom);
//         include_once "/View/admin.php";
//     }
// }
//     }}
// else 
//no login
// {
//     if(isset($_POST["login"])){
//         $login = $_POST["login"];
//         $password = $_POST["password"];
//         $LoginModel-> checkLogin($login,$password);
//         header('location: View/home.php');
//     }
//     else{
//         include_once "/View/home.php";
//     }
// }

// 
//log in
// if(isset($_POST["login"])){
//     $login = $_POST["login"];
//     $password = $_POST["password"];
//     $LoginModel-> checkLogin($login,$password);
//     var_dump($login,$password);
//     header('location: View/home.php');
// }
// else{
//     include_once PROJ_DIR . "/View/home.php";
// }
//log out
// if(isset($_GET["logout"])){
//     session_destroy();
//     header('location: View/home.php');
// }
