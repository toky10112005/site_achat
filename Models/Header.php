<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Coffre</title>
    <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">
    <style>
        .gold-bg { background-color: #D4AF37; }
    </style>
</head>
<body>
    <div class="container-fluid gold-bg">
        <div class="row align-items-center py-2">
            <div class="col-md-2">
                <a href="../Pages/Index.php"><img src="" alt="Menu" class="img-fluid"></a>
            </div>
            <div class="col-md-8">
                <div class="input-group">
                    <select class="form-select" style="max-width: 120px;">
                        <!-- Options ici -->
                    </select>
                    <input type="text" class="form-control" placeholder="Rechercher...">
                </div>
            </div>
            <div class="col-md-2 text-end">
                <?php if($_SESSION['nom']==null){?>
                    <a href="../Pages/Connexion.php" class="btn btn-outline-dark">Connexion</a>
                <?php } else{?>
                    <?= $_SESSION['nom']?>
                    <a href="../Traitement/Traitement_deconnexion.php" class="btn btn-outline-dark">Deconnexion</a>
                    <?php }?>
            </div>
        </div>
    </div>