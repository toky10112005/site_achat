<?php
require('../Models/Header.php');
require('../Incl/fonction_vue_categorie.php');

$list_categorie = aff($_GET['categorie_id']);
?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <h2 class="text-warning mb-4 border-bottom pb-2">
                <i class="bi bi-tags me-2"></i>Produits de la catégorie
            </h2>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
        <?php foreach($list_categorie as $categorie): ?>
        <div class="col">
            <div class="card h-100 shadow-sm border-warning">
                <!-- Image du produit -->
                <img src="<?= htmlspecialchars($categorie['image']) ?>" 
                     class="card-img-top p-3" 
                     alt="<?= htmlspecialchars($categorie['nom']) ?>"
                     style="height: 200px; object-fit: contain; background: #f8f9fa;">
                
                <div class="card-body">
                    <!-- Nom du produit -->
                    <h5 class="card-title text-truncate">
                        <i class="bi bi-box-seam text-warning me-2"></i>
                        <?= htmlspecialchars($categorie['nom']) ?>
                    </h5>
                    
                    <!-- Prix et stock -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="h5 text-success">
                            <i class="bi bi-currency-dollar"></i>
                            <?= number_format($categorie['prix'], 2) ?>
                        </span>
                        <span class="badge bg-<?= ($categorie['stock'] > 0) ? 'success' : 'danger' ?>">
                            <i class="bi bi-<?= ($categorie['stock'] > 0) ? 'check' : 'x' ?>-circle"></i>
                            <?= $categorie['stock'] ?> en stock
                        </span>
                    </div>
                </div>
                
                <!-- Bouton Acheter -->
                <div class="card-footer bg-transparent border-top-0">
                    <a href="#" class="btn btn-warning w-100 fw-bold">
                        <i class="bi bi-cart-plus me-2"></i>Acheter
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
require('../Models/Footer.php');
?>