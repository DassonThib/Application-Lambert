<?php
	require "../sql_connexion.php";

	$text = "<button onclick='addMedWindow()'>Ajouter un medecin</button>";
	$text .= '<table id="medecinList">';
	$text .= '<tr>
	<th>Id</th>
	<th>Nom</th>
	<th>Prenom</th>
	<th>Email</th>
	<th>Telephone</th>
	<th>Mobile</th>
	<th>Spécialité</th>
	<th>Action</th>
	</tr>';
	
	$query = "SELECT * FROM medecins m JOIN param_specialite s ON m.id_spe = s.id_spe";
	$result = mysqli_query($connexion, $query);
	if(!$result) echo $query;

	while($row = mysqli_fetch_assoc($result)){
		$text .= "<tr>
		<td>".$row['id_med']."</td>
		<td>".$row['nom_med']."</td>
		<td>".$row['prenom_med']."</td>
		<td>".$row['email_med']."</td>
		<td>".$row['tel_med']."</td>
		<td>".$row['mobile_med']."</td>
		<td>".$row['specialite']."</td>
		<td><button onclick='editMed(".$row['id_med'].")'>Editer</button></td>
		</tr>";
	}

	$text .= '</table>';

	mysqli_free_result($result);
	mysqli_close($connexion);

	echo $text;
?>
<script type='text/javascript' src='medecin/scripts/medecinList.js'></script>