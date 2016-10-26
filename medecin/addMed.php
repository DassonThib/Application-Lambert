<?php 
	require '../sql_connexion.php';
	
	$nom_med = mysqli_real_escape_string($connexion, $_POST['nom_med']);
	$prenom_med = mysqli_real_escape_string($connexion, $_POST['prenom_med']);
	$email_med = mysqli_real_escape_string($connexion, $_POST['email_med']);
	$tel_med = mysqli_real_escape_string($connexion, $_POST['tel_med']);
	$mobile_med = mysqli_real_escape_string($connexion, $_POST['mobile_med']);
	$specialite = mysqli_real_escape_string($connexion, $_POST['specialite']);

	$insert = "INSERT INTO medecins (nom_med, prenom_med, email_med, tel_med, mobile_med) VALUES ('$nom_med','$prenom_med','$email_med','$tel_med','$mobile_med')";
	$result = mysqli_query($connexion, $insert);
	if(!$result) echo "Erreur sur la requète :\n $insert \n(/medecin/updateMed.php)";
	
	mysqli_close($connexion);
?>