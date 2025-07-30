<?php 
    require('connect.php');

    function aff_categories(){
        $conn=dbconnect();
        $sql="SELECT nom FROM categories";
        $result=mysqli_query($conn,$sql);
        $valiny=array();
        if($result){
             while($row=mysqli_fetch_assoc($result)){
                    $valiny[]=$row['nom'];
                }
        }else{
            error_log("Erreur SQL: " . mysqli_error(dbconnect()));
        }

        return $valiny;
    }

    function aff_produits(){
        $conn=dbconnect();
        $sql="SELECT pr.nom,pr.prix,pr.image,pr.description,pr.stock,pr.categorie_id
                FROM produits pr
                JOIN (
                SELECT categorie_id, MAX(id) AS max_id
                FROM produits
                GROUP BY categorie_id
                ) derniers_produits ON pr.id = derniers_produits.max_id
                ORDER BY pr.categorie_id";
        $result=mysqli_query($conn,$sql);
        $valiny=array();
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $valiny[]=$row;
            }
           
        }else{
             error_log("Erreur SQL: " . mysqli_error(dbconnect()));
        }

         mysqli_close($conn);
        return $valiny;
    }
?>