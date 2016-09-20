<!doctype html>
<?php 
if(isset($_POST['username']) and isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == "Thibault" and $password == "123"){
		session_start();
		$_SESSION['Username'] = $username;
		$_SESSION['Password'] = $password;
		header("Location: home.php");
	}
} else {
	session_start();
	unset($_SESSION['Username']);
	unset($_SESSION['Password']);
}
// print_r($_SESSION);
?>

<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Merdic Interim</title>
  </head>
  <body>
    <div id="global">
      <header>
        <a href="index.php"><h1 id="titreBlog">Bienvenue sur Merdic Intérim</h1></a>
      </header>
      <div id="contenu">
		<table>
			<form method="POST" action="index.php">
				<tr>
					<td><label>Identifiant :</label></td>
					<td><input type='text' name='username'></td>
				</tr>
				<tr>
					<td><label>Mot de passe :</label></td>
					<td><input type='password' name='password'></td>
				</tr>
				<tr><td><input type='submit' value='Se connecter'></td></tr>
			</form>
			</table>
      </div> <!-- #contenu -->
      <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS par Thibault Dassonville.
      </footer>
    </div> <!-- #global -->
  </body>
</html>