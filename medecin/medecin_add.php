<html lang="fr">
  <?php require "../header.php" ?>
  <body>
	<div id="global">
		<?php
			require '../sql_connexion.php';

			$text = "<h3>Ajouter un nouveau médecin</h3>";
			$text .= "<input type='hidden' id='id_med'/>";
			$text .= "<table id='infoMed'>";
			
			$text .= "<tr>
			<th>Nom</th><td><input type='text' id='nom_med' /></td>
			<th>Email</th><td><input type='text' id='email_med' /></td>
			</tr>";
			
			$text .= "<tr>
			<th>Prénom</th><td><input type='text' id='prenom_med' /></td>
			<th>Telephone</th><td><input type='text' id='tel_med' /></td>
			</tr>";

			$text .= "<tr><th>Spécialité</th><td><select id='listSpe'>";
			$qrySpe = "SELECT * FROM param_specialite";
			$result = mysqli_query($connexion, $qrySpe);
			if(!$result) echo $qrySpe;
			while($row = mysqli_fetch_assoc($result)){
				$text .= "<option value='".$row['id_spe']."'>".$row['specialite']."</option>";
			}
			$text .= "</select></td>";
			
			$text .= "<th>Mobile</th><td><input type='text' id='mobile_med'/></td>
			</tr>";
			$text .= "<tr>
			<th></th><td></td>
			<th></th><td>
			<button onclick='insertMed()'>Ajouter</button>
			</td>
			</tr>";
			$text .= "</table>";

			echo $text;
		?>		
	</div>

	<script type="text/javascript" src="medecin/scripts/medecinScript.js"></script>
  </body>
</html>