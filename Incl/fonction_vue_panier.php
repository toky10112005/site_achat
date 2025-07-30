<?php
    require('connect.php');

    function avoir_nom_produit($id){
        $conn=dbconnect();
        $sql="SELECT nom,prix FROM produits WHERE id='$id'";
        $result=mysqli_query($conn,$sql);

        if($result){
            $row=mysqli_fetch_assoc($result);
            return $row;
        }else{
            error_log("Erreue ".mysqli_error($conn));
        }
    }
?>