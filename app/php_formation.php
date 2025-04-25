<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Formation PHP - e-school</title>
</head>

<body>
    <header class="container py-3">
        <nav class="row d-flex align-items-center">
            <div class="col-1 w-25">
                <a href="index.html"><img src="assets/LogoCrop.png" alt="logo de e-school"></a>
            </div>
            <form class="flex-grow-1 d-flex col-6">
                <input class="form-control" type="text" name="search" placeholder="Recherche...">
                <button class="btn btn-primary cursor-pointer" type="submit">🔍</button>
            </form>

            <div class="col-auto">
                <button id="burger" class="btn border-0 bg-transparent cursor-pointer" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                    <svg class="" width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                        <rect x="5" y="5" width="40" height="40" rx="8" ry="8" fill="white" />
                        <line x1="15" y1="18" x2="35" y2="18" stroke="black" stroke-width="3" stroke-linecap="round" />
                        <line x1="15" y1="25" x2="35" y2="25" stroke="black" stroke-width="3" stroke-linecap="round" />
                        <line x1="15" y1="32" x2="35" y2="32" stroke="black" stroke-width="3" stroke-linecap="round" />
                    </svg>
                </button>
            </div>
            <div class="collapse collapse-horizontal" id="menu">
                <ul class="list-unstyled text-center bg-light p-3 shadow">
                    <li><a class="text-decoration-none fs-2 text-secondary" href="index.html">Accueil</a></li>
                    <li><a class="text-decoration-none fs-2 text-secondary" href="html/catalogue.html">Catalogue</a></li>
                    <li><a class="text-decoration-none fs-2 text-secondary" href="html/formation.html">Formation</a></li>
                    <li><a class="text-decoration-none fs-2 text-secondary" href="#">Login</a></li>
                    <li><a class="text-decoration-none fs-2 text-secondary" href="#">Signup</a></li>
                    <li><a class="text-decoration-none fs-2 text-secondary" href="#">Contact</a></li>
                </ul>
                <button id="close" class="btn">X</button>
            </div>
        </nav>
    </header>

    <main id="formation">
        <section class="container mt-4">
            <h1 class="text-center pb-5">Formation en développement PHP</h1>
            <div class="row flex-column flex-md-row shadow-sm mb-4">
                <p class="text-center pb-5">Cette formation vous permettra d'apprendre le PHP pour développer des sites web dynamiques et interactifs côté serveur.</p>

                <div class="col-12 col-md-8 mb-4">
                    <img src="./assets/php-example.jpg" class="img-fluid rounded" alt="Exemple de formation PHP">
                </div>
                <div class="col-12 col-md-4">
                    <h2 class="text-center pb-5">Détails de la formation</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Durée : 60 Heures</li>
                        <li class="list-group-item">Langues : Français</li>
                        <li class="list-group-item">Contenu : 25 exercices pratiques</li>
                        <li class="list-group-item">Accès : Mobile & PC</li>
                        <li class="list-group-item">Certification incluse</li>
                    </ul>
                    <div class="pt-4 mb-4">
                        <button type="submit" >Inscrivez-vous !</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mt-4 shadow-sm">
            <h2 class="p-2">Présentation de la formation</h2>
            <p>Notre formation PHP vous apprendra à créer des applications web dynamiques, en utilisant le PHP pour interagir avec des bases de données, gérer les formulaires, et gérer les sessions utilisateurs.</p>

            <h2>Modules de la formation</h2>
            <div>
                <details class="p-3">
                    <summary>Introduction au PHP : syntaxe et variables</summary>
                    <p>Découvrez les bases du PHP, y compris les variables, les types de données, et la syntaxe du langage.</p>
                </details>
                <details class="p-3">
                    <summary>Les fonctions et les structures conditionnelles</summary>
                    <p>Apprenez à structurer votre code en PHP avec les fonctions, les conditions (if, switch), et les boucles.</p>
                </details>
                <details class="p-3">
                    <summary>Les formulaires et la gestion des données utilisateurs</summary>
                    <p>Apprenez à manipuler les formulaires, valider les entrées des utilisateurs et gérer les données soumises.</p>
                </details>
                <details class="p-3">
                    <summary>Connexion à une base de données avec MySQL</summary>
                    <p>Apprenez à interagir avec une base de données MySQL pour stocker et récupérer des données.</p>
                </details>
                <details class="p-3">
                    <summary>Gestion des sessions et sécurité</summary>
                    <p>Comprenez les mécanismes des sessions PHP pour gérer les utilisateurs et la sécurité des applications web.</p>
                </details>
            </div>
        </section>

        <section class="container mt-4 shadow-sm">
            <h2 class="p-2">Les prérequis de la formation</h2>
            <ul>
                <li>Aucune connaissance préalable n'est requise, nous couvrons les bases !</li>
                <li>Une volonté d'apprendre et de s'investir dans le développement web.</li>
                <li>Avoir un ordinateur Windows, Mac OS ou Linux avec un serveur local (comme XAMPP ou WAMP).</li>
            </ul>
            <p>Les notions de base en HTML et CSS sont un plus mais ne sont pas indispensables pour suivre cette formation.</p>
        </section>

        <section class="container mt-4 p-2 shadow-sm">
            <h2 class="p-2">Le Formateur</h2>
            <p>Notre formation est animée par [Nom du Formateur], expert PHP avec plus de 10 ans d'expérience dans le développement d'applications web complexes. Il vous guidera pas à pas à travers chaque concept de la formation, de l'introduction au PHP à la gestion des bases de données et de la sécurité des applications.</p>

            <ul>
                <li>Approche pratique et interactive avec des exercices réels.</li>
                <li>Explication claire et détaillée des concepts PHP.</li>
                <li>Support continu et sessions de questions-réponses pour répondre à vos besoins spécifiques.</li>
            </ul>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
            <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
            <path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
        </svg>
        <p>&copy; 2025 e-school - Tous droits réservés</p>
    </footer>
</body>

</html>
