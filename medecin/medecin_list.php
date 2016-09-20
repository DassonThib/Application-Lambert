<table id="medecinList">
	<tr><th>Id</th><th>Nom</th><th>Prenom</th><th>Email</th><th>Specialité</th><th>Telephone</th><th>Mobile</th><th>Editer</th></tr>
	<?php 
		$list = array(
			array( "id" => 1, "nom" => "toto", "prenom" => "titi", "email" => "toto@example.com", "specialite" => "Urgence", "telephone" => "0123456789", "mobile" => "0612345789" ),
			array( "id" => 2, "nom" => "Dassonville", "prenom" => "Thibault", "email" => "tdassonville@example.com", "specialite" => "Chirurgie", "telephone" => "0123456789", "mobile" => "0612345789" ),
			array( "id" => 3, "nom" => "Chetouani", "prenom" => "Badr", "email" => "bchetouani@example.com", "specialite" => "Regler le problème à la source", "telephone" => "0123456789", "mobile" => "0612345789" ),
			array( "id" => 4, "nom" => "Tahri", "prenom" => "Nabil", "email" => "ntahri@example.com", "specialite" => "Pediatrie", "telephone" => "0123456789", "mobile" => "0612345789" ),
			array( "id" => 5, "nom" => "Monsoh", "prenom" => "Lincoln", "email" => "lmonsoh@example.com", "specialite" => "Urgence", "telephone" => "0123456789", "mobile" => "0612345789" ),
			array( "id" => 6, "nom" => "Tocard", "prenom" => "Lambert", "email" => "ltocard@example.com", "specialite" => "Escroc", "telephone" => "0123456789", "mobile" => "0612345789" )
		);
		
		foreach($list as $val){
			echo "<tr><td>".$val['id']."</td><td>".$val['nom']."</td><td>".$val['prenom']."</td><td>".$val['email']."</td><td>".$val['specialite']."</td><td>".$val['telephone']."</td><td>".$val['mobile']."</td><td><button onclick='myfunction(".$val['id'].")'>Editer</button></td></tr>";
		}
	?>
</table>

<script>
	function myfunction(id){
		console.log(id);
		document.location.href = "medecin/medecin_edit.php";
	}
</script>