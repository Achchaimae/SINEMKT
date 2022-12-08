
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="../index.php?id=<?php echo $value["id"];?>" method="POST" >
    <?php print $value['id'] ?>
        <input type="text" name="nom" placeholder="nom" value="" >
        <input type="number" name="prix" placeholder="prix" >
        <input type="number" name="quantite" placeholder="quantite">
        <textarea name="description" cols="30" rows="10" placeholder="description"></textarea>
        <input type="file" name="image" placeholder="image">
        <input type="submit" name="update" value="update" >
    </form>
</body>
</html>