

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

		$text .= "<table id='infoMed'>";
		$text .= "<tr>
		<th>Nom</th><td><input type='text' id='nom_med' value='$nom_med'/></td>
		<th>Email</th><td><input type='text' id='email_med' value='$email_med'/></td>
		</tr>";
		$text .= "<tr>
		<th>Prénom</th><td><input type='text' id='prenom_med' value='$prenom_med'/></td>
		<th>Telephone</th><td><input type='text' id='tel_med' value='$tel_med'/></td>
		</tr>";
		$text .= "<tr>
		<th>Spécialité</th><td><input type='text' id='specialite' value='$specialite'/></td>
		<th>Mobile</th><td><input type='text' id='mobile_med' value='$mobile_med'/></td>
		</tr>";
		$text .= "<tr>
		<th></th><td></td>
		<th></th><td><button onclick='updateMed()'>Modifier</button></td>
		</tr>";
		$text .= "</table>";

		echo $text;
	} else {
		echo "Veuillez revenir à la liste";
	}
?>

<script>
	function updateMed() {
		var nom_med = document.getElementById('nom_med').value;
		var prenom_med = document.getElementById('prenom_med').value;
		var email_med = document.getElementById('email_med').value;
		var tel_med = document.getElementById('tel_med').value;
		var specialite = document.getElementById('specialite').value;
		var mobile_med = document.getElementById('mobile_med').value;
		console.log(mobile_med);
	}	
</script>