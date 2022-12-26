<?php 
 include ('../Controller/productController.php');
    $produit = new prodController();
    $listproduit = $produit->getproduit($_GET['id']);
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/mystyle.css">
    <title>Update</title>
</head>
<body>      
   
    
<section class="updateform">
       
            <form action="../index.php" method="POST" class="updatefile">
            <input type="hidden" name="id" value="<?php echo $listproduit['id'] ?>">
            <label for="nom">nom</label>
            <input type="text" name="nom" placeholder="nom" value="<?= $listproduit['nom'] ?>">
            <label for="prix">prix</label>
            <input type="number" name="prix" placeholder="prix" value="<?php echo $listproduit['prix'] ?>">
            <label for="quantite">quantite</label>
            <input type="number" name="quantite" placeholder="quantite" value="<?php echo $listproduit['quantite'] ?>">
            <label for="description">description</label>
            <textarea name="description"  cols="30" rows="10" placeholder="description"><?php echo $listproduit['description'] ?></textarea>
            <label for="image">image</label>
            <input type="file" name="image" placeholder="image" src="<?php echo $listproduit['image'] ?>">
            <input type="submit" name="update" value="update">
        
        </form>

</section>
</body>
</html>