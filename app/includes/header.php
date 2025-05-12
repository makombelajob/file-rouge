<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>e-school</title>
</head>
<body>
<header class="container py-3">
    <div class="row align-items-center">
        <!-- Logo -->
        <div class="col-3 col-lg-2">
            <a href="index.php">
                <img src="assets/LogoCrop.png" alt="logo de e-school" class="img-fluid">
            </a>
        </div>
        <?php include_once 'optionsList.php';?>
        <!-- Barre de recherche (visible en mobile + desktop) -->
        <div class="col-6 col-lg-2">
            <form class="d-flex">
                <input class="form-control me-2" type="search" name="search" placeholder="Recherche...">
                <button class="btn btn-primary" type="submit">🔍</button>
            </form>
        </div>

        <!-- Burger menu (mobile only) -->
        <div class="col-3 d-lg-none text-end">
            <button id="burger" class="btn border-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <!-- SVG burger icon -->
                <svg width="40" height="40" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                    <rect x="5" y="5" width="40" height="40" rx="8" ry="8" fill="white" />
                    <line x1="15" y1="18" x2="35" y2="18" stroke="black" stroke-width="3" stroke-linecap="round" />
                    <line x1="15" y1="25" x2="35" y2="25" stroke="black" stroke-width="3" stroke-linecap="round" />
                    <line x1="15" y1="32" x2="35" y2="32" stroke="black" stroke-width="3" stroke-linecap="round" />
                </svg>
            </button>
        </div>

        <!-- Menu complet (mobile collapsé, desktop affiché) -->
        <div class="col-12 collapse d-lg-flex justify-content-center mt-3 mt-lg-0 d-lg-none" id="menu">
            <ul class="list-unstyled d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                <li><a class="fs-4 text-decoration-none text-secondary" href="index.php">Accueil</a></li>
                <li><a class="fs-4 text-decoration-none text-secondary" href="catalogue.php">Catalogue</a></li>
                <li><a class="fs-4 text-decoration-none text-secondary" href="formation.php">Formation</a></li>
                <li><a class="fs-4 text-decoration-none text-secondary" href="login.php">Login</a></li>
                <li><a class="fs-4 text-decoration-none text-secondary" href="signup.php">Signup</a></li>
                <li><a class="fs-4 text-decoration-none text-secondary" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</header>
