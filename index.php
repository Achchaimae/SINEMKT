<?php
define("PROJ_DIR", dirname(__FILE__));


session_start();
include_once PROJ_DIR . "/Model/ProduitModel.php";
include_once PROJ_DIR . "/Model/LoginModel.php";
include_once PROJ_DIR . "/Controller/ProduitController.php";

$ProduitController = new ProduitController();
$LoginModel = new LoginModel();

if(isset($_SESSION["login"])){

    if(isset($_POST["ajouter"])){
        $nom = $_POST["nom"];
        $prix = $_POST["prix"];
        $quantite = $_POST["quantite"];
        $description = $_POST["description"];
        $image = $_POST["image"];
        $ProduitController->AjouterProduit($nom,$prix,$quantite,$description,$image);
        header('location: ../views/admin.php');
    }
    if(isset($_POST["update"])){
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $prix = $_POST["prix"];
        $quantite = $_POST["quantite"];
        $description = $_POST["description"];
        $image = $_POST["image"];
        $ProduitController->updateproduit($id,$nom,$prix,$quantite,$description,$image);
        header('location: ../View/admin.php');
    }
    if(isset($_GET["delete"])){
        $id = $_GET["delete"];
        $ProduitController->deleteproduit($id);
        header('location: ../View/admin.php');
    }
    if(isset($_POST["search"])){
        $nom = $_POST["nom"];
        $results = $ProduitController->searchproduit($nom);
        include_once PROJ_DIR . "/View/admin.php";
    }
}
else 
//no login
{
    if(isset($_POST["login"])){
        $login = $_POST["login"];
        $password = $_POST["password"];
        $LoginModel-> checkLogin($login,$password);
        header('location: View/home.php');
    }
    else{
        include_once PROJ_DIR . "/View/home.php";
    }
}




?>