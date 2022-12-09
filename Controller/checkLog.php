<?php
    if(!isset($_SESSION['login'])){
        header('Location: ../View/home.php');
    }
    else{
        header('Location: ../View/admin.php');
    }
?>