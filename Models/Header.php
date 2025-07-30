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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <style>
        .gold-bg { background-color: #D4AF37; }
        .dark-bg { background-color: #1a1a1a; }
        .gold-text { color: #D4AF37; }
        .gold-border { border-color: #D4AF37 !important; }

        /* Logo personnalisé */
        .custom-logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            background: #1a1a1a;
            border-radius: 50%;
            border: 2px solid #D4AF37;
            transition: all 0.3s ease;
        }
        .custom-logo-icon {
            font-size: 2.0rem;
            color: #D4AF37;
        }
        .custom-logo:hover {
            transform: rotate(15deg);
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.7);
        } 
        /* Header styles */
      
        .nav-icon {
            font-size: 1.2rem;
            margin-right: 5px;
        }
        .search-box {
            max-width: 600px;
            margin: 0 auto;
        }
        .user-greeting {
            font-weight: 500;
            color: #1a1a1a;
        }
        /* Fichier CSS */
.product-card {
  transition: transform 0.3s;
}
.product-card:hover {
  transform: scale(1.03);
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.card-img-top {
  background: #f8f9fa;
  border-radius: 5px 5px 0 0;
}
    </style>
</head>
<body>
    <div class="container-fluid gold-bg shadow-sm">
        <div class="row align-items-center py-2">
            <!-- Logo (adapté à la taille réelle) -->
         <div class="col-md-2">
                <a href="../Pages/Index.php" class="custom-logo text-decoration-none">
                    <i class="bi bi-box-seam custom-logo-icon"></i>
                </a>
            </div>
            
            <!-- Barre de recherche -->
            <div class="col-md-7">
                <div class="input-group search-box shadow">
                    <select class="form-select gold-border" style="max-width: 100px;">
                        <option selected>Toutes catégories</option>
                        <option>Bijoux</option>
                        <option>Montres</option>
                        <option>Accessoires</option>
                    </select>
                    <input type="text" class="form-control gold-border" placeholder="Rechercher...">
                    <button class="btn gold-bg" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
            
            <!-- Compte utilisateur -->
            <div class="col-md-3 text-end">
                <?php if(empty($_SESSION['nom'])): ?>
                    <a href="../Pages/Connexion.php" class="btn btn-outline-dark me-2">
                        <i class="bi bi-box-arrow-in-right"></i> Connexion
                    </a>
                    <a href="../Pages/Inscription.php" class="btn gold-bg text-dark">
                        <i class="bi bi-person-plus"></i> Inscription
                    </a>
                <?php else: ?>
                    <span class="user-greeting me-3">
                        <i class="bi bi-person-circle"></i> <?= htmlspecialchars($_SESSION['nom']) ?>
                    </span>
                    <a href="../Traitement/Traitement_deconnexion.php" class="btn btn-outline-dark">
                        <i class="bi bi-box-arrow-right"></i> Déconnexion
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>