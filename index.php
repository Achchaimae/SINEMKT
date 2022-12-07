<?php
// define("PROJ_DIR", dirname(__FILE__));

session_start();
include_once 'C:\xampp\htdocs\SINEMKT\Model\ProduitModel.php';
include_once 'C:\xampp\htdocs\SINEMKT\Model\LoginModel.php';
include_once 'C:\xampp\htdocs\SINEMKT\Controller\ProduitController.php';
include_once 'C:\xampp\htdocs\SINEMKT\ControllerLoginController.php';

$ProduitController = new ProduitController();
$LoginModel = new LoginModel();
$loginController = new LoginController();

if($_GET['c'] === "login"){
    $login = $_POST["login"];
    $password = $_POST["password"];
    $LoginModel-> checkLogin($login,$password);
    var_dump($login,$password);
    header('location: View/home.php');
    }
// if(isset($_SESSION["login"])){
//     if(($_SESSION["login"] === 'achchaimae1@gmail.com')){
//login
    
// if(isset($_SESSION["login"])){

//     if(isset($_POST["ajouter"])){
//         $nom = $_POST["nom"];
//         $prix = $_POST["prix"];
//         $quantite = $_POST["quantite"];
//         $description = $_POST["description"];
//         $image = $_POST["image"];
//         $ProduitController->AjouterProduit($nom,$prix,$quantite,$description,$image);
//         header('location: ../views/admin.php');
//     }
//     if(isset($_POST["update"])){
//         $id = $_POST["id"];
//         $nom = $_POST["nom"];
//         $prix = $_POST["prix"];
//         $quantite = $_POST["quantite"];
//         $description = $_POST["description"];
//         $image = $_POST["image"];
//         $ProduitController->updateproduit($id,$nom,$prix,$quantite,$description,$image);
//         header('location: ../View/admin.php');
//     }
//     if(isset($_GET["delete"])){
//         $id = $_GET["delete"];
//         $ProduitController->deleteproduit($id);
//         header('location: ../View/admin.php');
//     }
//     if(isset($_POST["search"])){
//         $nom = $_POST["nom"];
//         $results = $ProduitController->searchproduit($nom);
//         include_once PROJ_DIR . "/View/admin.php";
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
//         include_once PROJ_DIR . "/View/home.php";
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
