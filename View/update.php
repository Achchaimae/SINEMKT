<?php 
 include ('../Controller/productController.php');
    $produit = new prodController();
    $listproduit = $produit->listproduit();
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>      
   
    
<?php  foreach($listproduit as $key=>$value){ ?>
            <form action="../index.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
            <input type="text" name="nom" placeholder="nom" value="<?php echo $value['nom'] ?>">
            <input type="number" name="prix" placeholder="prix" value="<?php echo $value['prix'] ?>">
            <input type="number" name="quantite" placeholder="quantite" value="<?php echo $value['quantite'] ?>">
            <textarea name="description"  cols="30" rows="10" placeholder="description"><?php echo $value['description'] ?></textarea>
            <input type="file" name="image" placeholder="image" src="<?php echo $value['image'] ?>">
            <input type="submit" name="update" value="update">
        </form>
        
<?php  }
?>
</body>
</html>