<?php 
session_start();
    require('../Incl/fonction_achat.php');

if(isset($_SESSION['check']) && $_SESSION['check']==1){
    if(!isset($_SESSION['commande'])){
        $_SESSION['commande']=[];
    }

    $_SESSION['commande']=achat($_GET['id_produit'],$_SESSION['commande'],$_GET['quantite']);


   $_SESSION['panier_count']=array_sum(array_column($_SESSION['commande'], 'quantite'));

    header('Location:../Pages/Produits_categorie.php?categorie_id='.$_GET['categorie_id']);
    exit();
}
else{
    header('Location:../Pages/Connexion.php');
}
?>