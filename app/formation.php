<!doctype html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="../css/style.css">
	<title>e-school</title>
</head>

<body>
	<header class="container py-3">
		<nav class="row d-flex align-items-center">
			<div class="col-1 w-25">
				<a href="index.php"><img src="../images/LogoCrop.png" alt="logo de e-school"></a>
			</div>
			<form class="flex-grow-1 d-flex col-6">
				<input class="form-control" type="text" name="search" placeholder="Recherche...">
				<button class="btn btn-primary cursor-pointer" type="submit">🔍</button>
			</form>
			<div class="open d-none">
				<ul>
					<li><a href="#">Accueil</a></li>
					<li><a href="html/catalogue.html">catalogue</a></li>
					<li><a href="html/formation.html">Formation</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Signup</a></li>
					<li><a href="#">Contact</a></li>
					<button id="close">X</button>
				</ul>
			</div>
			<div class="col-2" id="burger">
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
			</div>
		</nav>
	</header>
	<main>

		<main class="container mt-4">
			<h1>Formation en développement HTML</h1>
			<section class="row">
				<div class="col-8">
				
					<p>Cette formation vous permet d'acquérir les bases indispensables à la création de pages web modernes.</p>
					<img src="../images/example1.jpeg" class="img-fluid rounded" alt="Exemple de formation">
				</div>
				<div class="col-4">
					<h2>Détails de la formation</h2>
					<ul class="list-group">
						<li class="list-group-item">Durée : 60 Heures</li>
						<li class="list-group-item">Langues : Français</li>
						<li class="list-group-item">Contenu : 34 exercices interactifs</li>
						<li class="list-group-item">Accès : Mobile & PC</li>
						<li class="list-group-item">Certification incluse</li>
					</ul>
				</div>
			</section>
		

		<section class="container mt-4"  >
			<h2  class="p-2">
				Présentation de la formation
			</h2>
			<p>Notre formation en développement HTML couvre les concepts fondamentaux tels que les balises, la structure
				d'une page web, l'intégration de médias et bien plus. Ce parcours est pensé pour les débutants ou ceux
				qui souhaitent renforcer leurs bases.</p>

			<h2>
				Modules de la formation
			</h2>
			<ol>
				<li> Introduction au HTML : bases et historique </li>
				<li> Structuration des pages web : utilisation des balises sémantiques </li>
				<li> Gestion des images et des liens hypertextes </li>
				<li> Gestion des Formulaires HTML </li>
				<li> Mise en forme avancée avec CSS intégré au HTML </li>
			</ol>

		</section>

		<section>
			<h2> Les prérequis de la formation </h2>
			<ul>
				<li>Aucune connaissance préalable n'est requise, on part de 0 !</li>
				<li>Une curiosité et une motivation pour apprendre le développement web.</li>
				<li>Avoir un ordinateur Windows, Mac OS ou Linux!</li>
				<li>Un éditeur de texte comme Visual Studio Code</li>
			</ul>
			<p>C'est tout ! </p>
		</section>


		<section>
			<h2> Le Formateur</h2>
			<p>Notre formation est animée par [Nom du Formateur], développeur web avec plus de 8 ans d'expérience dans
				la création de sites web modernes et optimisés. Son approche pédagogique est axée sur :</p>

			<ul>
				<li>La Pratique : Chaque module inclut des exercices concrets pour vous assurer de maîtriser les
					concepts appris.</li>
				<li>La Simplicité : Une explication claire des concepts techniques, adaptée aux apprenants débutants.
				</li>
				<li>L'Interactivité : Disponible pour répondre à vos questions et vous aider à surmonter les éventuels
					blocages.</li>
			</ul>
		</section>
	</main>



	<footer class="bg-dark text-white text-center py-3 mt-4">
		<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
			<path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
			<path fill="#fff"
				d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z">
			</path>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
			<path fill="#0288D1"
				d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z">
			</path>
			<path fill="#FFF"
				d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z">
			</path>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
			<circle cx="24" cy="24" r="20" fill="#E60023"></circle>
			<path fill="#FFF"
				d="M24.4439087,11.4161377c-8.6323242,0-13.2153931,5.7946167-13.2153931,12.1030884	c0,2.9338379,1.5615234,6.5853882,4.0599976,7.7484131c0.378418,0.1762085,0.581543,0.1000366,0.668457-0.2669067	c0.0668945-0.2784424,0.4038086-1.6369019,0.5553589-2.2684326c0.0484619-0.2015381,0.0246582-0.3746338-0.1384277-0.5731201	c-0.8269653-1.0030518-1.4884644-2.8461304-1.4884644-4.5645752c0-4.4115601,3.3399658-8.6799927,9.0299683-8.6799927	c4.9130859,0,8.3530884,3.3484497,8.3530884,8.1369019c0,5.4099731-2.7322998,9.1584473-6.2869263,9.1584473	c-1.9630737,0-3.4330444-1.6238403-2.9615479-3.6153564c0.5654297-2.3769531,1.6569214-4.9415283,1.6569214-6.6584473	c0-1.5354004-0.8230591-2.8169556-2.5299683-2.8169556c-2.006958,0-3.6184692,2.0753784-3.6184692,4.8569336	c0,1.7700195,0.5984497,2.9684448,0.5984497,2.9684448s-1.9822998,8.3815308-2.3453979,9.9415283	c-0.4019775,1.72229-0.2453003,4.1416016-0.0713501,5.7233887l0,0c0.4511108,0.1768799,0.9024048,0.3537598,1.3687744,0.4981079l0,0	c0.8168945-1.3278198,2.0349731-3.5056763,2.4864502-5.2422485c0.2438354-0.9361572,1.2468872-4.7546387,1.2468872-4.7546387	c0.6515503,1.2438965,2.5561523,2.296936,4.5831299,2.296936c6.0314941,0,10.378418-5.546936,10.378418-12.4400024	C36.7738647,16.3591919,31.3823242,11.4161377,24.4439087,11.4161377z">
			</path>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
			<path fill="#FF3D00"
				d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z">
			</path>
			<path fill="#FFF" d="M20 31L20 17 32 24z"></path>
		</svg>

		<p>&copy; 2025 e-school - Tous droits réservés</p>

	</footer>
</body>

</html>