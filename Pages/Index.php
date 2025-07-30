<?php
require('../Models/Header.php');
require('../Incl/fonction_vue_index.php');

$list_categories = aff_categories();
$produits_une = aff_produits();
?>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar Catégories (15%) -->
    <div class="col-md-2 p-3 bg-dark text-white" style="width:15%; min-height:100vh;">
      <h4 class="text-warning mb-4">Catégories</h4>
      <ul class="nav flex-column">
        <?php foreach($list_categories as $categorie): ?>
          <li class="nav-item mb-2">
            <a href="Produits_categorie.php?categorie_id=<?= $categorie['id'] ?>" class="nav-link text-white"><?= htmlspecialchars($categorie['nom']) ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Produits à la Une (85%) -->
    <div class="col-lg-10 col-md-9 p-4">
      <h2 class="mb-4 text-warning">Produits à la Une</h2>
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        <?php foreach($produits_une as $produit): ?>
          <div class="col">
            <div class="card h-100 border-warning product-card">
              <a href="Produits_categorie.php?categorie_id=<?= $produit['categorie_id'] ?>">
                <img src="<?= htmlspecialchars($produit['image']) ?>" 
                     class="card-img-top p-2" 
                     alt="<?= htmlspecialchars($produit['nom']) ?>"
                     style="height: 180px; object-fit: contain;">
              </a>
              <div class="card-body text-center">
                <h5 class="card-title">
                  <a href="Produits_categorie.php?categorie_id=<?= $produit['categorie_id'] ?>" 
                     class="text-decoration-none text-dark">
                    <?= htmlspecialchars($produit['nom']) ?>
                  </a>
                </h5>
                <p class="h5 text-warning mt-2">$<?= number_format($produit['prix'], 2) ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<?php
require('../Models/Footer.php');
?>