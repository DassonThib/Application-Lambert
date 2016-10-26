<?php
	if($_POST['id_med'] != "") {
		require "../sql_connexion.php";

		$id_med = $_POST['id_med'];

		$query = "SELECT * FROM medecins m JOIN param_specialite s ON m.id_spe = s.id_spe WHERE m.id_med = $id_med";
		$result = mysqli_query($connexion,$query);
		if(!$result) echo $query;

		$row = mysqli_fetch_assoc($result);
		extract($row);

		$text = "<h3>Fiche du medecin : $prenom_med $nom_med </h3>";
		$text .= "<input type='hidden' id='id_med' value='$id_med'/>";
		$text .= "<table id='infoMed'>";
		
		$text .= "<tr>
		<th>Nom</th><td><input type='text' id='nom_med' value='$nom_med'/></td>
		<th>Email</th><td><input type='text' id='email_med' value='$email_med'/></td>
		</tr>";
		
		$text .= "<tr>
		<th>Prénom</th><td><input type='text' id='prenom_med' value='$prenom_med'/></td>
		<th>Telephone</th><td><input type='text' id='tel_med' value='$tel_med'/></td>
		</tr>";

		$text .= "<tr><th>Spécialité</th><td><select id='listSpe'>";
		$qrySpe = "SELECT * FROM param_specialite";
		$result = mysqli_query($connexion, $qrySpe);
		if(!$result) echo $qrySpe;
		while($row = mysqli_fetch_assoc($result)){
			if($row['id_spe'] == $id_spe){
				$text .= "<option value='".$row['id_spe']."' selected>".$row['specialite']."</option>";
			} else {
				$text .= "<option value='".$row['id_spe']."'>".$row['specialite']."</option>";
			}
		}
		$text .= "</select></td>";
		
		$text .= "<th>Mobile</th><td><input type='text' id='mobile_med' value='$mobile_med'/></td>
		</tr>";
		$text .= "<tr>
		<th></th><td></td>
		<th></th><td>
		<button onclick='updateMed()'>Modifier</button>
		<button onclick='deleteMed()'>Supprimer</button>
		</td>
		</tr>";
		$text .= "</table>";

		echo $text;
	} else {
		echo "Veuillez revenir à la liste";
	}
?>

<script type="text/javascript" src="medecin/scripts/medecinScript.js"></script>