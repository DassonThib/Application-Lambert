<?php 
	if($_POST['id_med'] != null) {
		require '../sql_connexion.php';

		$query = "SELECT * FROM medecins WHERE id_med = ".$_POST['id_med'];
		$result = mysqli_query($connexion, $query);
		if(!$result) echo " Erreur sur la requète :\n $query \n(/medecin/updateMed.php)";

		$rowCount = mysqli_num_rows($result);
		if($rowCount == 1) {
			$id_med = mysqli_real_escape_string($connexion, $_POST['id_med']);
			$nom_med = mysqli_real_escape_string($connexion, $_POST['nom_med']);
			$prenom_med = mysqli_real_escape_string($connexion, $_POST['prenom_med']);
			$email_med = mysqli_real_escape_string($connexion, $_POST['email_med']);
			$tel_med = mysqli_real_escape_string($connexion, $_POST['tel_med']);
			$mobile_med = mysqli_real_escape_string($connexion, $_POST['mobile_med']);
			$id_spe = mysqli_real_escape_string($connexion, $_POST['id_spe']);

			$update = "UPDATE medecins SET nom_med = '$nom_med', prenom_med = '$prenom_med', email_med = '$email_med', tel_med = '$tel_med', mobile_med = '$mobile_med', id_spe = $id_spe WHERE id_med = $id_med";
			$result = mysqli_query($connexion, $update);
			if(!$result) echo "Erreur sur la requète :\n $update \n(/medecin/updateMed.php)";
		} else {
			echo "Erreur : Plusieurs même médecins (/medecin/updateMed.php)";
		}

		mysqli_close($connexion);
	}
?>