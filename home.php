<!doctype html>
<?php 
	session_start();
	
	if(!isset($_SESSION['Username'])){
		header("Location: index.php");
	}
	// print_r($_SESSION);
	// print_r($_COOKIE);
?>

<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/style.css" />
	<script src="http://code.jquery.com/jquery-1.12.3.js"></script>
    <title>Merdic Interim</title>
  </head>
  <body>
    <div id="global">
      <header>
        <a href="index.php"><h1 id="titreBlog">Bienvenue sur Merdic Intérim</h1></a>
      </header>
	  
	  <!-- #menu -->
      <div id="menu">
		<table>
			<tr>
				<button onclick="loadPartial('hopital')">Hôpitaux</button>
				<button onclick="loadPartial('medecin')">Médecins</button>
				<button onclick="loadPartial('contrat')">Contrats</button>
				<button onclick="loadPartial('planning')">Planning</button>
				<button onclick="loadPartial('deco')">Déconnexion</button>
			</tr>
		</table>
      </div> 
	  <hr>
	  <!-- #contenu -->
	  <div id="partialView"></div>
	  
      <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS par Thibault Dassonville.
      </footer>
    </div> <!-- #global -->
	
	<script>
		// document.ready(function(){
			function loadPartial(page) {
				switch (page) {
					case 'hopital':
						$.ajax({
							url: 'hopital/hopital_index.php',
							type: 'GET',
							dataType: 'html',
							success: function (result) {
								$('#partialView').html(result);
							}
						});
						break;
					case 'medecin':
						$.ajax({
							url: 'medecin/medecin_index.php',
							type: 'GET',
							dataType: 'html',
							success: function (result) {
								$('#partialView').html(result);
							}
						});
						break;
					case 'contrat':
						$.ajax({
							url: 'contrat/contrat_index.php',
							type: 'GET',
							dataType: 'html',
							success: function (result) {
								$('#partialView').html(result);
							}
						});
						break;
					case 'planning':
						$.ajax({
							url: 'planning/planning_index.php',
							type: 'GET',
							dataType: 'html',
							success: function (result) {
								$('#partialView').html(result);
							}
						});
						break;
					case 'deco':
						document.location.href="index.php";
						break;
				}
			}	
		// });
	</script>
  </body>
</html>