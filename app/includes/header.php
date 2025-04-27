<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>e-school</title>
</head>
<body>
<header class="container py-3">
    <nav class="row d-flex align-items-center">
        <div class="col-1 w-25 col-lg-1 m-auto">
            <a href="index.php"><img src="assets/LogoCrop.png" alt="logo de e-school"></a>
        </div>
        <form class="flex-grow-1 d-flex col-6 col-lg-8">
            <label class="flex-grow-1 me-2 w-100">
                <input class="form-control w-100 fs-4" type="text" name="search" placeholder="Recherche..."/>
            </label>
            <button class="btn btn-primary cursor-pointer" type="submit">🔍</button>
        </form>

        <div class="col-auto">
            <button id="burger" class="btn border-0 bg-transparent cursor-pointer d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <svg class="" width="50" height="50" viewBox="0 0 50 50"
                     xmlns="http://www.w3.org/2000/svg">
                    <rect x="5" y="5" width="40" height="40" rx="8" ry="8" fill="white" />
                    <line x1="15" y1="18" x2="35" y2="18" stroke="black" stroke-width="3"
                          stroke-linecap="round" />
                    <line x1="15" y1="25" x2="35" y2="25" stroke="black" stroke-width="3"
                          stroke-linecap="round" />
                    <line x1="15" y1="32" x2="35" y2="32" stroke="black" stroke-width="3"
                          stroke-linecap="round" />
                </svg>
            </button>
        </div>
        <div class="col-12 col-lg-12">
            <div class="w-75 w-lg-auto my-lg-5 collapse collapse-horizontal my-3 d-lg-flex justify-content-center col-lg" id="menu">
                <ul class="list-unstyled text-center d-flex flex-column flex-lg-row text-center shadow align-items-center justify-content-center gap-4 w-100">
                    <li><a class="text-decoration-none fs-2 text-secondary" href="index.php">Accueil</a></li>
                    <li><a class="text-decoration-none fs-2 text-secondary" href="catalogue.php">catalogue</a></li>
                    <li><a class="text-decoration-none fs-2 text-secondary" href="formation.php">Formation</a></li>
                    <li><a class="text-decoration-none fs-2 text-secondary" href="login.php">Login</a></li>
                    <li><a class="text-decoration-none fs-2 text-secondary" href="signup.php">Signup</a></li>
                    <li><a class="text-decoration-none fs-2 text-secondary" href="#contact">Contact</a></li>
                </ul>
                <button type="button" class="btn-close fs-4 ms-auto d-lg-none" data-bs-toggle="collapse" data-bs-target="#menu" aria-label="Close"></button>
            </div>
        </div>
    </nav>
</header>
