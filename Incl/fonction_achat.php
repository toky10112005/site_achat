<?php

    function achat($id_produits,$tab,$quantite){
        if(!isset($tab[$id_produits])){
            $tab[$id_produits]['quantite']=$quantite;
        }else{
            $tab[$id_produits]['quantite']=+$quantite;
        }
        return $tab;
    }

?>