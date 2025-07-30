<?php
session_start();
    require('../Incl/fonction_login.php');

    $mdp=password_hash($_GET['mdp'],PASSWORD_BCRYPT);

    inscription($_GET['nom'],$_GET['email'],$mdp);

    $_SESSION['nom']=$_GET['nom'];

    header('Location:../Pages/Index.php');
?>