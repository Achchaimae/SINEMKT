<?php
include_once 'C:\xampp\htdocs\SINEMKT\classes\DataBase.php';
class Produit extends dbh{

    public function Ajouter($nom,$prix,$quantite,$description,$image){
        $sql = "insert into produit (nom,prix,quantite,description,image) values(?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom,$prix,$quantite,$description,$image]);
    }

    public function listproduit(){
        $sql = "select * from produit";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
       return $stmt;
        
    }

    public function getproduit($id){
        $sql = "SELECT * FROM produit WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $results = $stmt->fetch();
        return $results;
    }
    //update data
    public function updateproduit($id,$nom,$prix,$quantite,$description,$image){
        $sql = "UPDATE produit SET nom=?,prix=?,quantite=?,description=?,image=? WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom,$prix,$quantite,$description,$image,$id]);
    }
   
    public function deleteproduit($id){
        $sql = "delete from produit where id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    public function searchproduit($nom){
        $sql = "select * from produit where nom like '%$nom%'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

} 
