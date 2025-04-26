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
				<div class="col-1 w-25">
					<a href="index.html"><img src="assets/LogoCrop.png" alt="logo de e-school"></a>
				</div>
				<form class="flex-grow-1 d-flex col-6">
					<input class="form-control" type="text" name="search" placeholder="Recherche...">
					<button class="btn btn-primary cursor-pointer" type="submit">🔍</button>
				</form>

				<div class="col-auto">
					<button id="burger" class="btn border-0 bg-transparent cursor-pointer" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
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
				<div class="collapse collapse-horizontal" id="menu">
					<ul class="list-unstyled text-center bg-light p-3 shadow">
						<li><a class="text-decoration-none fs-2 text-secondary" href="index.html">Accueil</a></li>
						<li><a class="text-decoration-none fs-2 text-secondary" href="html/catalogue.html">catalogue</a></li>
						<li><a class="text-decoration-none fs-2 text-secondary" href="html/formation.html">Formation</a></li>
						<li><a class="text-decoration-none fs-2 text-secondary" href="#">Login</a></li>
						<li><a class="text-decoration-none fs-2 text-secondary" href="#">Signup</a></li>
						<li><a class="text-decoration-none fs-2 text-secondary" href="#">Contact</a></li>
					</ul>
					<button id="close" class="btn">X</button>
				</div>
			</nav>
		</header>
		<main class="container">
            <!-- Section du slide  -->
			<section>
				<div class="row">
					<h1 class="col-12 text-center fs-1 fw-bolder my-2 text-uppercase">E-school</h1>
					<div class="carousel slide col-12">
						<article class="carousel-inner">
							<figure class="carousel-item active">
								<img class="d-block w-100" src="assets/example1.jpeg" alt="Image de l'école">
								<figcaption class="carousel-caption">
									<h2 class="fs-1">E-school</h2>
									<p>Nos actions</p>
								</figcaption>
							</figure>
							<figure class="carousel-item">
								<img class="d-block w-100" src="assets/example2.jpeg" alt="Image de l'école">
								<figcaption class="carousel-caption d-none d-md-block">
									<h2 class="fs-1">E-school</h2>
									<p>Nos actions</p>
								</figcaption>
							</figure>
							<figure class="carousel-item">
								<img class="d-block w-100" src="assets/example3.jpeg" alt="Image de l'école">
								<figcaption class="carousel-caption">
									<h2 class="fs-1">E-school</h2>
									<p>Nos actions</p>
								</figcaption>
							</figure>
						</article>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					
					</div>
				</div>
			</section>
            
            <!-- Section de la présentation de l'école -->
			<section class="row">
                <h2 class="text-center text-uppercase fs-1 my-3 fw-semibold">🏫 Présentation</h2>
				<div>
					<article class="card m-2">
						<img class="card-img-top" src="assets/example2.jpeg" alt="Image de representation de l'ecole">
						<div class="card-body">
							<h2 class="card-title fs-2 text-center fw-semibold text-uppercase my-3">Votre avenir commence ici, avec eSchool.</h2>
							<p class="card-content fs-3">Chez <span class="text-uppercase fw-bolder">eSchool</span>, nous croyons que l’apprentissage doit être accessible, efficace et connecté au monde d’aujourd’hui. C’est pourquoi nous proposons des formations en ligne conçues pour s’adapter à votre rythme, à vos besoins et à vos ambitions.
                            </p>
                            <p class="card-content fs-3">Que vous souhaitiez développer de nouvelles compétences, changer de voie professionnelle ou approfondir vos connaissances, notre équipe d’experts est là pour vous accompagner à chaque étape.</p>
                            <p class="card-content fs-3">Nos cours sont pensés pour être concrets, interactifs et directement applicables dans le monde réel.</p>
							<div class="text-center">
								<button class="btn btn-primary fs-4">Savoir Plus</button>
							</div>
						</div>
					</article>
					<article class="card m-2">
						
						<img class="card-img-top" src="assets/example3.jpeg" alt="Image catalogue de l'ecole">
						<div class="card-body">
							<h2 class="card-title fs-2 text-center fw-semibold text-uppercase my-3">Pourquoi choisir eSchool ?</h2>
                            <p class="card-content fs-3"><span class="text-uppercase fw-bolder">eSchool</span>, c’est une équipe dédiée à votre réussite. Nous croyons fermement que l’éducation doit être adaptée aux besoins du monde moderne, tout en restant accessible à tous. Nos programmes de formation sont conçus pour vous aider à évoluer dans votre carrière ou à vous reconvertir, tout en bénéficiant des meilleures ressources pédagogiques.</p>
							<div class="text-center">
								<button class="btn btn-primary fs-4">Savoir Plus</button>
							</div>
						</div>
					</article>
					<article class="card m-2 row">
						<img class="card-img-top" src="assets/example1.jpeg" alt="Image nos valeurs de l'ecole">
						<div class="card-body col-12">
							<h2 class="card-title fs-2 text-center fw-semibold text-uppercase my-3">Nos valeurs</h2>
							<ul class="card-content list-unstyled row">
                                <li class="fs-3">
                                    <div class="col-12 my-2">
                                        <span class=" text-uppercase text-secondary fw-semibold fs-3">Innovation</span>
                                    </div>
                                    Nous utilisons les dernières technologies pour rendre votre apprentissage plus interactif.
                                </li>
                                <li class="fs-3">
                                    <div class="col-12 my-2">
                                        <span class="text-uppercase text-secondary fw-semibold fs-3">Accessibilité</span>
                                    </div>
                                    Apprenez à votre rythme, où que vous soyez, avec des cours 100% accéssible en ligne.
                                </li>
                                <li class="fs-3">
                                    <div class="col-12 my-2">
                                        <span class="text-uppercase text-secondary fw-semibold fs-3">Excellence</span>
                                    </div>
                                    Nos formateurs sont des experts dans leur domaine, vous garantissant une formation de qualité.
                                </li>
                            </ul>
							<div class="text-center">
								<button class="btn btn-primary fs-4">Savoir Plus</button>
							</div>
						</div>
					</article>
					<article class="card m-2 row">
						<img class="card-img-top" src="assets/example2.jpeg" alt="Image representant l'ecole">
						<div class="card-body">
							<h2 class="card-title fs-2 text-uppercase fw-semibold text-center my-2">Témoignages d’étudiants</h2>
							<p class="card-text fs-2">"Grâce à eSchool, j’ai réussi ma reconversion professionnelle et j’ai trouvé un emploi dans les 6 mois suivant ma certification !"
                                <div class="col-12 text-center ">
                                <span class="fw-semibold fs-2 text-uppercase">Marie, diplômée 2024</span>
                            </div>
                            </p>
						</div>
					</article>
				</div>
			</section>

            <!-- Section de la présentation des formations -->
            <section>
                <h2 class="fs-1 text-uppercase text-center fw-semibold my-3">Nos formations Frontend et Backend</h2>
                <div class="row">
                    <h3 class="fs-2 fw-semibold my-3 text-uppercase text-primary-emphasis">Formations Frontend</h3>
                    <h4 class="fs-3 my-2 fw-semibold text-secondary">Objectif de la formation :</h4>
                    <p class="fs-4">Maîtriser les bases du développement web pour créer des sites web interactifs et responsives.</p>
                    <h5 class="fs-4 text-info-emphasis my-3 fw-semibold">Contenu de la formation</h5>
                    <article class="card m-2">
                       <svg class="m-auto my-3" xmlns="http://www.w3.org/2000/svg" width="150px" height="150px">
                           <use xlink:href="assets/sprites.svg#html"></use>
                       </svg>
                        <div class="card-body">
                            <h2 class="card-title fs-1 text-uppercase fw-bolder">HTML (Hypertext Markup Language)</h2>
                            <ul class="list-unstyled">
                                <li class="fs-2 text-secondary-emphasis">Structure de base d'une page web</li>
                                <li class="fs-2 text-secondary-emphasis">Balises HTML, éléments de texte, liens, images</li>
                                <li class="fs-2 text-secondary-emphasis">Formulaires et formulaires interactifs</li>
                                <li class="fs-2 text-secondary-emphasis">SEO de base avec HTML</li>
                            </ul>
                            <div class="text-center">
                                <button class="btn btn-primary fs-4">Savoir Plus</button>
                            </div>
                        </div>
                    </article>
                    <article class="card m-2">
                        <svg class="m-auto my-3" xmlns="http://www.w3.org/2000/svg" width="150px" height="150px">
                            <use xlink:href="assets/sprites.svg#css"></use>
                        </svg>
                        <div class="card-body">
                            <h2 class="card-title fs-1 text-uppercase fw-bolder">CSS (Cascading Style Sheets)</h2>
                            <ul class="list-unstyled">
                                <li class="fs-2 text-secondary-emphasis">Mise en forme des éléments</li>
                                <li class="fs-2 text-secondary-emphasis">Layouts (flexbox, grid, etc.)</li>
                                <li class="fs-2 text-secondary-emphasis">Responsive et design adaptatif (mobile-first)</li>
                                <li class="fs-2 text-secondary-emphasis">Animations et transitions CSS</li>
                                <li class="fs-2 text-secondary-emphasis">Préprocesseurs CSS (ex. : Sass ou LESS)</li>
                            </ul>
                            <div class="text-center">
                                <button class="btn btn-primary fs-4">Savoir Plus</button>
                            </div>
                        </div>
                    </article>
                    <article class="card m-2">
                        <svg class="m-auto my-3" xmlns="http://www.w3.org/2000/svg" width="150px" height="150px">
                            <use xlink:href="assets/sprites.svg#js"></use>
                        </svg>
                        <div class="card-body">
                            <h2 class="card-title fs-1 text-uppercase fw-bolder">JavaScript</h2>
                            <ul class="list-unstyled">
                                <li class="fs-2 text-secondary-emphasis">Syntaxe de base, variables, fonctions, boucles</li>
                                <li class="fs-2 text-secondary-emphasis">Manipulation du DOM (Document Object Model)</li>
                                <li class="fs-2 text-secondary-emphasis">Événements et gestion des interactions utilisateurs</li>
                                <li class="fs-2 text-secondary-emphasis">Introduction aux frameworks JavaScript (ex. : React ou Vue.js)</li>
                                <li>Asynchrone : Promesses et Fetch API</li>
                            </ul>
                            <div class="text-center">
                                <button class="btn btn-primary fs-4">Savoir Plus</button>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="row">
                    <h3 class="fs-2 fw-semibold my-3 text-uppercase text-primary-emphasis">Formations Backend</h3>
                    <h4 class="fs-3 my-2 fw-semibold text-secondary">Objectif de la formation :</h4>
                    <p class="fs-4">Comprendre, Maîtriser les fondamentaux dans le développement backend</p>
                    <h5 class="fs-4 text-info-emphasis my-3 fw-semibold">Contenu de la formation</h5>
                    <article class="card m-2">
                        <svg class="m-auto my-3" xmlns="http://www.w3.org/2000/svg" width="150px" height="150px">
                            <use xlink:href="assets/sprites.svg#java"></use>
                        </svg>
                        <div class="card-body">
                            <h2 class="card-title fs-1 text-uppercase fw-bolder">Java</h2>
                            <ul class="list-unstyled">
                                <li class="fs-2 text-secondary-emphasis">Introduction à Java </li>
                                <li class="fs-2 text-secondary-emphasis">Programmation orientée objet (POO)</li>
                                <li class="fs-2 text-secondary-emphasis">Spring Framework</li>
                            </ul>
                            <div class="text-center">
                                <button class="btn btn-primary fs-4">Savoir Plus</button>
                            </div>
                        </div>
                    </article>
                    <article class="card m-2">
                        <svg class="m-auto my-3" xmlns="http://www.w3.org/2000/svg" width="150px" height="150px">
                            <use xlink:href="assets/sprites.svg#python"></use>
                        </svg>
                        <div class="card-body">
                            <h2 class="card-title fs-1 text-uppercase fw-bolder">Python</h2>
                            <ul class="list-unstyled">
                                <li class="fs-2 text-secondary-emphasis">Python de base</li>
                                <li class="fs-2 text-secondary-emphasis">Frameworks Python pour le développement web</li>
                                <li class="fs-2 text-secondary-emphasis">Bibliothèques Python pour le traitement des données</li>
                            </ul>
                            <div class="text-center">
                                <button class="btn btn-primary fs-4">Savoir Plus</button>
                            </div>
                        </div>
                    </article>
                    <article class="card m-2">
                        <svg class="m-auto my-3" xmlns="http://www.w3.org/2000/svg" width="150px" height="150px">
                            <use xlink:href="assets/sprites.svg#php"></use>
                        </svg>
                        <div class="card-body">
                            <h2 class="card-title fs-1 text-uppercase fw-bolder">Php de base</h2>
                            <ul class="list-unstyled">
                                <li class="fs-2 text-secondary-emphasis">PHP de base</li>
                                <li class="fs-2 text-secondary-emphasis">Bases de données avec PHP et MySQL</li>
                                <li class="fs-2 text-secondary-emphasis">Frameworks PHP</li>
                            </ul>
                            <div class="text-center">
                                <button class="btn btn-primary fs-4">Savoir Plus</button>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
            <!-- Section géolocalisation -->
            <section class="row">
                <h2 class="fs-1 text-uppercase text-center fw-semibold my-3">Notre Localisation</h2>
                <div class="w-100 m-auto">
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.999906318043!2d2.293308315674779!3d48.85837007928774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc7f5f3406f%3A0xa17b6e9c1613b9b!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1714123456789!5m2!1sfr!2sfr"
                            width="600"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
            </section>
            <!-- Section de contact -->
			<section class="container mt-5" id="contact">
				<div class="row">
					<div class="col-12 text-center">
						<h2 class="fs-1 text-uppercase text-center fw-semibold my-4">Contactez-Nous</h2>
					</div>
					<form action>
						<div class="mb-3">
							<label class="form-label fs-1" for="email">Email</label>
							<input class="form-control p-3 fs-1" type="email" id="email" placeholder="Entrez votre mail" required>
						</div>
						<div class="mb-3">
							<label class="form-label fs-1" for="sujet">Sujet</label>
							<input class="form-control py-3 fs-1" type="text" id="sujet" placeholder="Entrez votre sujet" required>
						</div>
						<div class="mb-3">
							<label class="form-label fs-1" for="message">Message</label>
							<textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label fs-1" for="exampleCheck1">J'accpetes de les conditions rgpd</label>
						</div>
						<div class="text-center">
							<button class="btn btn-primary p-2 m-2 fs-2">Envoyer</button>
						</div>
					</form>
				</div>
			</section>
            <div class="">
                <a href="#" class="position-fixed bottom-0 end-0 m-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="lightblue" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
                    </svg>
                </a>
            </div>
		</main>
		<footer class="container mt-5 bg-secondary py-5">
			<div class="row">
                <svg class="col-3" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
                     height="30" viewBox="0 0 48 48">
                    <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                    <path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
                </svg>
				<svg class="col-3" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
					 height="30" viewBox="0 0 48 48">
					<path fill="#0288D1"
						  d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path><path
						fill="#FFF"
						d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z"></path>
				</svg>
				<svg class="col-3" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
					 height="30" viewBox="0 0 48 48">
					<circle cx="24" cy="24" r="20" fill="#E60023"></circle>
					<path fill="#FFF" d="M24.4439087,11.4161377c-8.6323242,0-13.2153931,5.7946167-13.2153931,12.1030884	c0,2.9338379,1.5615234,6.5853882,4.0599976,7.7484131c0.378418,0.1762085,0.581543,0.1000366,0.668457-0.2669067	c0.0668945-0.2784424,0.4038086-1.6369019,0.5553589-2.2684326c0.0484619-0.2015381,0.0246582-0.3746338-0.1384277-0.5731201	c-0.8269653-1.0030518-1.4884644-2.8461304-1.4884644-4.5645752c0-4.4115601,3.3399658-8.6799927,9.0299683-8.6799927	c4.9130859,0,8.3530884,3.3484497,8.3530884,8.1369019c0,5.4099731-2.7322998,9.1584473-6.2869263,9.1584473	c-1.9630737,0-3.4330444-1.6238403-2.9615479-3.6153564c0.5654297-2.3769531,1.6569214-4.9415283,1.6569214-6.6584473	c0-1.5354004-0.8230591-2.8169556-2.5299683-2.8169556c-2.006958,0-3.6184692,2.0753784-3.6184692,4.8569336	c0,1.7700195,0.5984497,2.9684448,0.5984497,2.9684448s-1.9822998,8.3815308-2.3453979,9.9415283	c-0.4019775,1.72229-0.2453003,4.1416016-0.0713501,5.7233887l0,0c0.4511108,0.1768799,0.9024048,0.3537598,1.3687744,0.4981079l0,0	c0.8168945-1.3278198,2.0349731-3.5056763,2.4864502-5.2422485c0.2438354-0.9361572,1.2468872-4.7546387,1.2468872-4.7546387	c0.6515503,1.2438965,2.5561523,2.296936,4.5831299,2.296936c6.0314941,0,10.378418-5.546936,10.378418-12.4400024	C36.7738647,16.3591919,31.3823242,11.4161377,24.4439087,11.4161377z"></path>
				</svg>
				<svg class="col-3" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
					 height="30" viewBox="0 0 48 48">
					<path fill="#FF3D00"
						  d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z"></path><path
						fill="#FFF" d="M20 31L20 17 32 24z"></path>
				</svg>
			</div>
		</footer>
	</body>
</html>