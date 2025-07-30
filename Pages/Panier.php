<?php
session_start();
require('../Incl/fonction_vue_panier.php');
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - Le Coffre</title>
    <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <style>
        .gold-bg { background-color: #d4a508ff; }
        .dark-bg { background-color: #1a1a1a; }
        .gold-text { color: #d4a508ff; }
        
        .header-logo {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }
        .user-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
         /* Logo personnalisé */
        .custom-logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            background: #1a1a1a;
            border-radius: 50%;
            border: 2px solid #d4a508ff;
            transition: all 0.3s ease;
        }
        .custom-logo-icon {
            font-size: 2.0rem;
            color: #d4a508ff;
        }
        .custom-logo:hover {
            transform: rotate(15deg);
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.7);
        } 
    </style>
</head>
<body style="background-color: #e6e3e3ff;">
    <!-- Entête simplifiée -->
    <header class="gold-bg shadow-sm py-1 ">
        <div class="container">
            <div class="row align-items-center">
               <div class="col-md-2">
                <a href="../Pages/Index.php" class="custom-logo text-decoration-none">
                    <i class="bi bi-box-seam custom-logo-icon"></i>
                </a>
            </div>
                <div class="col-md-10 text-end">
                    <?php if(isset($_SESSION['nom'])): ?>
                         <span class="user-greeting me-3">
                        <i class="bi bi-person-circle"></i> <?= htmlspecialchars($_SESSION['nom']) ?>
                    </span>
                             <a href="../Traitement/Traitement_deconnexion.php" class="btn btn-outline-dark">
                        <i class="bi bi-box-arrow-right"></i> Déconnexion
                    </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>

    
     <div class="container py-4">
    <div class="bg-white p-4 rounded shadow-sm">
        <div class="row">
            <div class="col-12">
                <h2 class="text-warning mb-4 border-bottom pb-2">
                    <i class="bi bi-cart4 me-2"></i>Votre Panier
                </h2>
                
                <a href="Index.php" class="btn btn-outline-warning mb-4">
                    <i class="bi bi-arrow-left"></i> Continuer mes achats
                </a>
                
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <ul class="list-group">
                            <?php foreach($_SESSION['commande'] as $cle => $commande): 
                                $nom = avoir_nom_produit($cle);
                                $sous_total = $nom['prix'] * $commande['quantite'];
                                $total += $sous_total;
                            ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold"><?= htmlspecialchars($nom['nom']) ?></span>
                                    <span class="text-muted ms-2">x<?= $commande['quantite'] ?></span>
                                </div>
                                <div>
                                    <span class="badge bg-warning text-dark me-3">
                                        $<?= number_format($sous_total, 2) ?>
                                    </span>
                                    <a href="../Traitement/supprimer_panier.php?id=<?= $cle ?>" 
                                       class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">
                                <i class="bi bi-receipt"></i> Total :
                                <span class="text-success">$<?= number_format($total, 2) ?></span>
                            </h4>
                            <a href="../Traitement/valider_commande.php" 
                               class="btn btn-success btn-lg">
                                <i class="bi bi-check-circle"></i> Valider la commande
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    

    <?php require('../Models/Footer.php'); ?>
</body>
</html>