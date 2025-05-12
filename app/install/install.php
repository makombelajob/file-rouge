<?php
require_once '../includes/dbconnect.php';

function createTable($pdo){
    $queries = [
        "DROP DATABASE IF EXISTS eSchool;",
        "CREATE DATABASE eSchool;",
        "USE eSchool;",
        "CREATE TABLE IF NOT EXISTS Formation (
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(50) NOT NULL,
            duration INT NOT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            content INT NOT NULL,
            price FLOAT NOT NULL,
            description TEXT,
            doc_link VARCHAR(150)
        )",
        "CREATE TABLE IF NOT EXISTS Category (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
        )",
        "CREATE TABLE IF NOT EXISTS Role(
            id INT AUT0_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            level INT NOT NULL
        )",
        "CREATE TABLE IF NOT EXISTS Status(
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL
        )",
        "CREATE TABLE IF NOT EXISTS User(
            id INT AUTO_INCREMENT PRIMARY KEY,
            lastname VARCHAR(50) NOT NULL,
            firstname VARCHAR(50) NOT NULL,
            email VARCHAR(250) NOT NULL UNIQUE,
            passwd VARCHAR(30) NOT NULL,
            id_role INT NOT NULL,
            FOREIGN KEY (id_role) REFERENCES Role(id)
        )",
        "CREATE TABLE IF NOT EXISTS Order(
            id INT AUTO_INCREMENT PRIMARY KEY,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            total INT NOT NULL,
            id_status INT NOT NULL,
            id_user INT NOT NULL,
            FOREIGN KEY (id_status) REFERENCES Status(id),
            FOREIGN KEY (id_user) REFERENCES User(id)
        )",
        "CREATE TABLE IF NOT EXISTS associate(
            id_formation INT NOT NULL,
            id_order INT NOT NULL,
            PRIMARY KEY (id_formation, id_order),
            FOREIGN KEY (id_formation) REFERENCES Formation(id),
            FOREIGN KEY (id_order) REFERENCES Order(id)
        )",
        "CREATE TABLE IF NOT EXISTS belong(
            id_formation INT NOT NULL,
            id_category INT NOT NULL,
            PRIMARY KEY (id_formation, id_category),
            FOREIGN KEY (id_formation) REFERENCES Formation(id),
            FOREIGN KEY (id_category) REFERENCES Category(id),
        )",
        "CREATE TABLE IF NOT EXISTS dispense(
            id_user INT NOT NULL,
            id_formation INT NOT NULL,
            PRIMARY KEY(id_user, id_formation),
            FOREIGN KEY (id_user) REFERENCES User(id),
            FOREIGN KEY (id_formation) REFERENCES Formation(id)
        )"
    ];
    foreach ($queries as $query) {
        $pdo->exec($query);
    }
}

function insertFormation($pdo){
    $formations = [
        ['Html', 60, 25, 200.00, '<h2 class="p-2">Présentation de la formation</h2>
	<p>Notre formation en développement HTML couvre les concepts fondamentaux tels que les balises, la structure
		d\'une page web, l\'intégration de médias et bien plus. Ce parcours est pensé pour les débutants ou ceux
		qui souhaitent renforcer leurs bases.</p>

	<h2>Modules de la formation</h2>
	<div>
		<details class="p-3">
			<summary>Introduction au HTML : bases et historique</summary>
			<p>Une introduction complète au HTML, couvrant son historique, son importance et ses bases essentielles.</p>
		</details>
		<details class="p-3">
			<summary>Structuration des pages web : utilisation des balises sémantiques</summary>
			<p>Découvrez comment structurer vos pages web de manière claire et accessible en utilisant des balises sémantiques.</p>
		</details>
		<details class="p-3">
			<summary>Gestion des images et des liens hypertextes</summary>
			<p>Apprenez à intégrer des images et à créer des liens hypertextes pour rendre vos pages interactives.</p>
		</details>
		<details class="p-3">
			<summary>Gestion des Formulaires HTML</summary>
			<p>Découvrez comment concevoir des formulaires efficaces pour collecter des données utilisateur.</p>
		</details>
		<details class="p-3">
			<summary>Mise en forme avancée avec CSS intégré au HTML</summary>
			<p>Explorez les techniques de mise en forme avancée en combinant HTML et CSS pour des designs modernes.</p>
		</details>
	</div><div><h2 class="p-2">Les prérequis de la formation</h2>
	<ul>
		<li>Aucune connaissance préalable n est requise, on part de 0 !</li>
		<li>Une curiosité et une motivation pour apprendre le développement web.</li>
		<li>Avoir un ordinateur Windows, Mac OS ou Linux !</li>
		<li>Un éditeur de texte comme Visual Studio Code</li>
	</ul>
	<p>C est tout !</p></div>']
    ];
    foreach ($formations as $formation) {
        $pdo->exec($formation);
    }
}