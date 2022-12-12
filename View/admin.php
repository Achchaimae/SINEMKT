<?php 
    session_start();
    if(!isset($_SESSION['login'])){
        header('Location: ../View/login.php');
    }
        include ('../Controller/productController.php');
        $produit = new prodController();
        $listproduit = $produit->listproduit();
        
    
 ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Data Table</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/style .css"> 
<link rel="stylesheet" href="../assets/css/mystyle.css">
</head>
<body>
    <button class="logout"> <a href="../index.php?a=log">logout</a></button>
    
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2><b>Dashboard</b></h2></div>
                        <div class="col-sm-4">
                            <!-- <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" placeholder="Search&hellip;">
                            </div> -->
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>image</th>
                            <th>Name </th>
                            <th>Price<i class="fa fa-sort"></i></th>
                            <th>quantité<i class="fa fa-sort"></i></th>
                            <th>Description</th>
                           <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php  foreach($listproduit as $key=>$value){ ?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td class="product-img"> <img src="../<?php echo $value['image'] ?>" ></td>
                            <td><?php echo $value['nom'] ?></td>
                            <td><?php echo $value['prix'] ?></td>
                            <td><?php echo $value['quantite'] ?></td>
                            <td><?php echo $value['description'] ?></td>
                            <td>
                               
                                <a href="update.php?id=<?php echo $value['id'];?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="../index.php?id=<?php echo $value['id']; ?>&delete=true" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                        <?php  }
                        ?>
       
                    </tbody>
                    <button class="add-btn"><a href="Ajouter.php">ajouter</a></button> 
                </table>
            </div>
        </div>        
    </div>     
</body>
</html>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>