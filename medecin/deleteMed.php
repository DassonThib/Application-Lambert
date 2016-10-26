<?php 
	if($_POST['id_med'] != null) {
		require '../sql_connexion.php';

		$query = "SELECT * FROM medecins WHERE id_med = ".$_POST['id_med'];
		$result = mysqli_query($connexion, $query);
		if(!$result) echo " Erreur sur la requète :\n $query \n(/medecin/deleteMed.php)";

		$rowCount = mysqli_num_rows($result);
		if($rowCount == 1) {
			$id_med = mysqli_real_escape_string($connexion, $_POST['id_med']);

			$delete = "DELETE FROM medecins WHERE id_med = $id_med";
			$result = mysqli_query($connexion, $delete);
			if(!$result) echo "Erreur sur la requète :\n $delete \n(/medecin/deleteMed.php)";
		} else {
			echo "Erreur : Plusieurs même médecins (/medecin/deleteMed.php)";
		}

		mysqli_close($connexion);
	}
?>