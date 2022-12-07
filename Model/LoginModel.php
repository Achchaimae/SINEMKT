<?php
include_once  'C:\xampp\htdocs\SINEMKT\Model\DataBase.php';
class LoginModel extends dbh{

    public function checkLogin($login,$password){

        $sql = "SELECT * FROM admin WHERE login='$login' and password = '$password'";
        //connect do the connection with db
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if($results){
                        //password & login exist
                        $test = array_values($results); 
                        // header('location: ../views/admin.php');
                        return $test[0]; //returns number of members in an array
                    }
                else {
                        return 0;
                    }
       
    }
}
?>