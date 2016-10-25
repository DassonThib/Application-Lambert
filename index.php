<!doctype html>
<?php 
	if(isset($_POST['username']) and isset($_POST['password'])){
		require "sql_connexion.php";

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM user WHERE Login = '$username' AND Password = '$password'";
		$result = mysqli_query($connexion, $query);
		if(!$result) echo $query;
		$rowCount = mysqli_num_rows($result);

		if($rowCount > 0){
			session_start();
			$_SESSION['Username'] = $username;
			$_SESSION['Password'] = $password;
			header("Location: home.php");
		} else {
			echo "Le login ou le mot de passe est incorrect";
		}

		mysqli_free_result($result);
		mysqli_close($connexion);
	} else {
		session_start();
		unset($_SESSION['Username']);
		unset($_SESSION['Password']);
	}
?>

<html lang="fr">
  <?php require "header.php"; ?>
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
      <?php require "footer.php"; ?>
    </div> <!-- #global -->
  </body>
</html>