<?php 
	session_start();
	
	if(!isset($_SESSION['Username'])){
		header("Location: index.php");
	}
?>

<html lang="fr">
  <?php require "header.php" ?>
  <body>
    <div id="global">
      <header>
        <a href="home.php"><h1 id="titreBlog">Bienvenue sur Merdic Intérim</h1></a>
      </header>
	  	  
	  <!-- #menu -->
      <div id="menu">
		<table>
			<tr>
				<button onclick="loadPartialMenu('hopital')">Hôpitaux</button>
				<button onclick="loadPartialMenu('medecin')">Médecins</button>
				<button onclick="loadPartialMenu('contrat')">Contrats</button>
				<button onclick="loadPartialMenu('facture')">Facturation</button>
				<button onclick="loadPartialMenu('planning')">Planning</button>				
				<button onclick="loadPartialMenu('deco')">Déconnexion</button>
			</tr>
		</table>
      </div> 
	  <hr>
	  <!-- #contenu -->
	  <div id="partialView"></div>
	  
      <?php require "footer.php"; ?>
    </div> <!-- #global -->
	
	<!-- Fonction de chargement des différents menus -->
	<script type="text/javascript" src="script/loadPartial.js"></script>

  </body>
</html>