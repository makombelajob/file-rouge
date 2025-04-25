<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Formation JavaScript - e-school</title>
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
            <h1 class="text-center pb-5">Formation en développement JavaScript</h1>
            <div class="row flex-column flex-md-row shadow-sm mb-4">
                <p class="text-center pb-5">Cette formation vous permet de maîtriser le JavaScript pour rendre vos sites interactifs et dynamiques.</p>

                <div class="col-12 col-md-8 mb-4">
                    <img src="./assets/js-example.jpg" class="img-fluid rounded" alt="Exemple de formation JavaScript">
                </div>
                <div class="col-12 col-md-4">
                    <h2 class="text-center pb-5">Détails de la formation</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Durée : 60 Heures</li>
                        <li class="list-group-item">Langues : Français</li>
                        <li class="list-group-item">Contenu : 30 exercices pratiques</li>
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
            <p>Notre formation en JavaScript vous apprendra à rendre vos pages web dynamiques et interactives avec l'utilisation des dernières techniques JavaScript.</p>

            <h2>Modules de la formation</h2>
            <div>
                <details class="p-3">
                    <summary>Introduction à JavaScript : syntaxe et variables</summary>
                    <p>Apprenez les bases du langage JavaScript, y compris les types de données, les variables, et la syntaxe de base.</p>
                </details>
                <details class="p-3">
                    <summary>Les fonctions en JavaScript</summary>
                    <p>Découvrez comment déclarer et utiliser des fonctions pour structurer votre code efficacement.</p>
                </details>
                <details class="p-3">
                    <summary>Manipulation du DOM avec JavaScript</summary>
                    <p>Apprenez à interagir avec le DOM pour modifier dynamiquement le contenu d'une page web.</p>
                </details>
                <details class="p-3">
                    <summary>Les événements en JavaScript</summary>
                    <p>Maîtrisez la gestion des événements pour rendre vos pages web interactives (clics, saisie clavier, etc.).</p>
                </details>
                <details class="p-3">
                    <summary>Les promesses et l'Asynchrone en JavaScript</summary>
                    <p>Comprenez les mécanismes des promesses, des async/await, et comment gérer les opérations asynchrones dans votre code.</p>
                </details>
            </div>
        </section>

        <section class="container mt-4 shadow-sm">
            <h2 class="p-2">Les prérequis de la formation</h2>
            <ul>
                <li>Aucune connaissance préalable n'est requise, on part de zéro !</li>
                <li>Une curiosité et une motivation pour apprendre le développement web et le JavaScript.</li>
                <li>Avoir un ordinateur Windows, Mac OS ou Linux !</li>
                <li>Un éditeur de texte comme Visual Studio Code</li>
            </ul>
            <p>C'est tout !</p>
        </section>

        <section class="container mt-4 p-2 shadow-sm">
            <h2 class="p-2">Le Formateur</h2>
            <p>Notre formation est animée par [Nom du Formateur], expert en JavaScript avec plus de 10 ans d'expérience dans le développement d'applications web modernes. Son approche pédagogique est centrée sur :</p>

            <ul>
                <li>La Pratique : Chaque module inclut des exercices pratiques pour vous permettre de mettre en œuvre les concepts appris.</li>
                <li>La Simplicité : Des explications claires, accessibles aux débutants.</li>
                <li>L'Interactivité : Le formateur est disponible pour répondre à vos questions et vous guider tout au long de la formation.</li>
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
