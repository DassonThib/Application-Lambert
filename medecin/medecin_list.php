<?php
	require "../sql_connexion.php";

	$text = '<table id="medecinList">';
	$text .= '<tr><th>Id</th><th>Nom</th><th>Prenom</th><th>Email</th><th>Telephone</th><th>Mobile</th><th>Editer</th></tr>';
	
	$query = "SELECT * FROM medecins";
	$result = mysqli_query($connexion, $query);
	if(!$result) echo $query;

	while($row = mysqli_fetch_assoc($result)){
		$text .= "<tr><td>".$row['id']."</td><td>".$row['nom_med']."</td><td>".$row['prenom_med']."</td><td>".$row['email_med']."</td><td>".$row['tel_med']."</td><td>".$row['mobile_med']."</td><td><button onclick='editMed(".$row['id'].")'>Editer</button></td></tr>";
	}

	$text .= '</table>';

	mysqli_free_result($result);
	mysqli_close($connexion);

	echo $text;
?>
