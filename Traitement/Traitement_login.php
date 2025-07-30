<?php
session_start();
    require('../Incl/fonction_login.php');

    $user=connexion($_GET['email'],$_GET['mdp']);

    if($user!=null){
       $_SESSION['nom']=$user;
       $_SESSION['check']=1;
       header('Location:../Pages/Index.php');
    }else{
        header('Location:../Pages/Inscription.php');
    }
    exit();
?>