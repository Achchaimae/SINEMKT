<?php
include_once 'C:\xampp\htdocs\SINEMKT\Model\ProduitModel.php';


class prodController{

    protected $produit;
    public function __construct(){
        $this->produit = new Produit();
    }
    public function AjouterProduit($nom,$prix,$quantite,$description,$image){
        $this->produit->Ajouter($nom,$prix,$quantite,$description,$image);
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
    public function addPic(){
        if(isset($_FILES['produit'])){
            $picname=$_FILES['produit']['name'];
            $picsize=$_FILES['produit']['size'];
            $pictmpname=$_FILES['produit']['tmp_name'];
            if($_FILES['produit']['error']===0){
                
                    $img_ex = pathinfo($picname, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);

                    $allowed_exs=array("jpg","jpeg","png");

                    if(in_array($img_ex_lc,$allowed_exs)){
                        $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                        $img_upload_path='public/uploads/'.$new_img_name;
                        move_uploaded_file($pictmpname,$img_upload_path);
                        return $img_upload_path;
                    }else{
                        die("error");
                    }

            }else{
                    die("error");
                }
        }
    }

}
