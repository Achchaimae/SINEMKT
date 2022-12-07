<?php
include_once 'C:\xampp\htdocs\SINEMKT\Model\ProduitModel.php';


class ProduitController{
    protected $produit;
    public function __construct(){
        $this->produit = new Produit();
    }
    public function AjouterProduit($nom,$prix,$quantite,$description,$image){
        $this->produit->AjouterProduit($nom,$prix,$quantite,$description,$image);
    }
    public function listproduit(){
        return $this->produit->listproduit();
    }
    public function getproduit($id){
        return $this->produit->getproduit($id);
    }
    public function updateproduit($id,$nom,$prix,$quantite,$description,$image){
        $this->produit->updateproduit($id,$nom,$prix,$quantite,$description,$image);
    }
    public function deleteproduit($id){
        $this->produit->deleteproduit($id);
    }
    public function searchproduit($nom){
        return $this->produit->searchproduit($nom);
    }

}