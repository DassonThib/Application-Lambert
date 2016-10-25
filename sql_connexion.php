<?php 
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "application-lambert");


	// 1. Create a database connexion
	$connexion = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
	if (!$connexion) {
		die("Impossible de se connecter à la base de données : " . mysql_error());
	}

	// 2. Select a database to use
	$db_select = mysqli_select_db($connexion,DB_NAME);
	if (!$db_select) {
		die("Base de données non trouvée : " . mysql_error());
	}

	mysqli_set_charset($connexion, 'utf8');
?>