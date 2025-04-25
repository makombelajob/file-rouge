<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Document</title>
</head>

<body>
    <header>
        <header>
			<nav>
				<div>
					<img src="../images/LogoCrop.png" alt="logo de e-school">
				</div>
				<form>
					<input type="text" name="search" placeholder="Recherche...">
					<button type="submit">🔍</button>
				</form>
				<div class="open">
					<ul>
						<li><a href="#">Accueil</a></li>
						<li><a href="html/catalogue.html">catalogue</a></li>
						<li><a href="html/formation.html">Formation</a></li>
						<li><a href="html/login.html">Login</a></li>
						<li><a href="html/signup.html">Signup</a></li>
						<li><a href="#">Contact</a></li>
						<button id="close">X</button>
					</ul>
				</div>
				<div id="burger">
					<svg width="50" height="50" viewBox="0 0 50 50"
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
    </header>
    <main>
         <!--------------------Section Sign In---------------------->
         <section>
            <h2>Se connecter</h2>
            <!--------------------Addresse e-mail---------------------->
            <article class="container">
                <div class="row">
                    <div class="col-12">
                        <label for="identifiant">Identifiant :</label>
                        <input type="email" id="identifiant" name="identifiant" placeholder="example@mail.com">
                    </div>
                </div>
                <!--------------------Mot de passe---------------------->
                <div class="row">
                    <div class="col-12">
                        <label for="mdp">Mot de passe :</label>
                        <input type="password" id="mdp" name="mdp" placeholder="1 Majuscule">
                    </div>
                </div>
                <!------------------Button Se connecter-------------------->
                <div class="row">
                    <div class="col-12" id="seConnecter">
                        <button class="btn">Se connecter</button>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>