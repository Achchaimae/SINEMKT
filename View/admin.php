<?php 
    session_start();
    if(!isset($_SESSION['login'])){
        header('Location: ../View/login.php');
    }else{
        echo "welcome ";
        die();
        include ('Controller/productController.php');
        $produit = new prodController();
        $listproduit = $produit->listproduit();
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<?php  foreach($listproduit as $key=>$value){ ?>
        <div>
            <h1><?php echo $value['nom'] ?></h1>
            <h2><?php echo $value['prix'] ?></h2>
            <h3><?php echo $value['quantite'] ?></h3>
            <h4><?php echo $value['description'] ?></h4>
            <img src="<?php echo $value['image'] ?>" >
            <button><a href="View/update.php?id=<?php echo $value['id'];?>">update</a></button>
            <button><a href="../index.php?id=<?php echo $value['id'];?>&delete=true" name="delete">supprimer</a></button>
           
        </div>
<?php  }
?>
       
        <button><a href="Ajouter.php">ajouter</a></button>
       <!-- <button><a href="Modifier.php">modifier</a></button> -->
       
    
</body>
</html>