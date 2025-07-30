<?php
    require('connect.php');

    function aff($id){
        $conn=dbconnect();
        $sql="SELECT * FROM produits WHERE categorie_id='$id'";
        $result=mysqli_query($conn,$sql);
        $valiny=array();
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $valiny[]=$row;
            }
            return $valiny;
        }else{
             error_log("Erreur SQL: " . mysqli_error(dbconnect()));
        }
    }
?>