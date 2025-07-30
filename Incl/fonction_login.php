<?php
    require('connect.php');

    function connexion($email,$mdp){
        
        $sql="SELECT nom,mot_de_passe FROM users WHERE email='$email'";

        $result=mysqli_query(dbconnect(),$sql);

        if(mysqli_num_rows($result)===1){
            $row=mysqli_fetch_assoc($result);
            if(password_verify($mdp,$row['mot_de_passe'])){
                    $valiny=$row['nom'];
                    mysqli_close(dbconnect());
                return $valiny;
            }
        }
        else{
            return null;
        }
    }

    function inscription($nom,$email,$mdp){
        $sql="INSERT INTO users (nom,email,mot_de_passe) VALUES('$nom','$email','$mdp')";
        $resutl=mysqli_query(dbconnect(),$sql);
    }
?>