<?php
include_once PROJ_DIR . "/classes/DataBase.php";
class Produit extends dbh{

    public function AjouterProduit($nom,$prix,$quantite,$description,$image){
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
        $sql = "select * from produit where id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $results = $stmt->fetch();
        return $results;
    }
    //update produit
    // public function updateproduit($id,$nom,$prix,$quantite,$description,$image){
    //     $sql = "update produit set nom=?,prix=?,quantite=?,description=?,image=? where id=?";
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->execute([$nom,$prix,$quantite,$description,$image,$id]);
    // }
   //end update produit
    public function updateproduit($id,$nom,$prix,$quantite,$description,$image){
        $sql = "update produit set nom=$nom,prix=$prix,quantite=$quantite,description=$description,image=$image where id=$id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $id;
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
