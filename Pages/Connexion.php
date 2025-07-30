<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">
    <style>
        .gold-text { color: #D4AF37; }
        .gold-bg { background-color: #D4AF37; }
        .dark-bg { background-color: #1a1a1a; }
        .gold-border { border-color: #D4AF37 !important; }
        /* Correction survol boutons */
        .btn-outline-warning:hover { color: #1a1a1a !important; }
        .gold-bg:hover { color: #D4AF37 !important; }
    </style>
</head>
<body class="dark-bg">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg border-gold">
                    <div class="card-header bg-dark gold-border text-center">
                        <img src="https://via.placeholder.com/100x100.png?text=Logo" alt="Logo" class="mb-3 rounded-circle" style="border: 2px solid #D4AF37;">
                        <h3 class="gold-text">Connexion</h3>
                    </div>
                    <div class="card-body bg-dark">
                        <form action="../Traitement/Traitement_login.php" method="get">
                            <div class="mb-3">
                                <label for="email" class="form-label gold-text">Email</label>
                                <input type="email" name="email" id="email" class="form-control bg-secondary text-white gold-border" required>
                            </div>
                            <div class="mb-3">
                                <label for="mdp" class="form-label gold-text">Mot de passe</label>
                                <input type="password" name="mdp" id="mdp" class="form-control bg-secondary text-white gold-border" required>
                            </div>
                            <div class="d-grid">
                                <input type="submit" value="Valider" class="btn gold-bg text-dark fw-bold">
                            </div>
                        </form>

                        <hr class="gold-bg">

                        <div class="d-flex justify-content-between">
                            <a href="../Pages/Index.php" class="btn btn-outline-secondary">Retour</a>
                            <form action="../Pages/Inscription.php" method="get" class="d-inline">
                                <input type="submit" value="Inscription" class="btn btn-outline-warning">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>