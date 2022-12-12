<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/mystyle.css">
    <title>Ajouter</title>
</head>
<body>
    <h1>Ajouter un produit</h1>
    <form action="../index.php" method="POST" enctype="multipart/form-data" class="add-form">
        <input type="text" name="nom" placeholder="nom">
        <input type="number" name="prix" placeholder="prix">
        <input type="number" name="quantite" placeholder="quantite">
        <textarea name="description"  cols="30" rows="10" placeholder="description"></textarea>
        <input type="file" name="produit" placeholder="image">
        <input type="submit" name="ajouter" value="ajouter" class="form-submit">
    </form>
</body>
</html>