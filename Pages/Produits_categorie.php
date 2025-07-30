<?php
require('../Models/Header.php');
require('../Incl/fonction_vue_categorie.php');

$list_produit = aff($_GET['categorie_id']);
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
        <?php foreach($list_produit as $produit): ?>
        <div class="col">
            <div class="card h-100 shadow-sm border-warning">
                
                <img src="<?= htmlspecialchars($produit['image']) ?>" 
                     class="card-img-top p-3" 
                     alt="<?= htmlspecialchars($produit['nom']) ?>"
                     style="height: 200px; object-fit: contain; background: #f8f9fa;">
                
                <div class="card-body">
                  
                    <h5 class="card-title text-truncate">
                        <i class="bi bi-box-seam text-warning me-2"></i>
                        <?= htmlspecialchars($produit['nom']) ?>
                    </h5>
                    
                    
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="h5 text-success">
                            <i class="bi bi-currency-dollar"></i>
                            <?= number_format($produit['prix'], 2) ?>
                        </span>
                        <span class="badge bg-<?= ($produit['stock'] > 0) ? 'success' : 'danger' ?>">
                            <i class="bi bi-<?= ($produit['stock'] > 0) ? 'check' : 'x' ?>-circle"></i>
                            <?= $produit['stock'] ?> en stock
                        </span>
                    </div>
                </div>
                
               <div class="card-footer bg-transparent border-top-0">
                    <form action="../Traitement/Traitement_achat.php" method="get" class="d-flex gap-2">
                        <input type="hidden" name="id_produit" value="<?= $produit['id'] ?>">
                         <input type="hidden" name="categorie_id" value="<?= $_GET['categorie_id'] ?>">
        
                <!-- Sélecteur de quantité -->
                    <select name="quantite" class="form-select gold-border" style="width: 80px;">
                        <?php 
                            $max_quantite = min(10, $produit['stock']); // Limite à 10 ou stock disponible
                              for($i = 1; $i <= $max_quantite; $i++): 
                        ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                    </select>
        
                 <!-- Bouton Acheter -->
                            <button type="submit" class="btn btn-warning flex-grow-1 fw-bold">
                                <i class="bi bi-cart-plus me-2"></i>Acheter
                            </button>
                     </form>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
require('../Models/Footer.php');
?>