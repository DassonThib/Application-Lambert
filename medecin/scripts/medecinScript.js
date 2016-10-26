function updateMed() {
	var id_med = document.getElementById('id_med').value;
	var nom_med = document.getElementById('nom_med').value;
	var prenom_med = document.getElementById('prenom_med').value;
	var email_med = document.getElementById('email_med').value;
	var tel_med = document.getElementById('tel_med').value;
	var id_spe = document.getElementById('listSpe').value;
	var mobile_med = document.getElementById('mobile_med').value;

	$.ajax({
		url:"medecin/updateMed.php",
		type:"POST",
		datatype:"html",
		data: {
			id_med:id_med,
			nom_med:nom_med,
			prenom_med:prenom_med, 
			email_med:email_med, 
			tel_med:tel_med, 
			id_spe:id_spe, 
			mobile_med:mobile_med
		},
		success: function(){
			editMed(id_med);
		}
	});
}

function insertMed(){
	var nom_med = document.getElementById('nom_med').value;
	var prenom_med = document.getElementById('prenom_med').value;
	var email_med = document.getElementById('email_med').value;
	var tel_med = document.getElementById('tel_med').value;
	var specialite = document.getElementById('specialite').value;
	var mobile_med = document.getElementById('mobile_med').value;

	$.ajax({
		url:"medecin/addMed.php",
		type:"POST",
		datatype:"html",
		data: {
			nom_med:nom_med, 
			prenom_med:prenom_med, 
			email_med:email_med, 
			tel_med:tel_med, 
			specialite:specialite, 
			mobile_med:mobile_med
		},
		success: function(result){
			window.close();
		}
	});
}

function deleteMed() {
	var id_med = document.getElementById('id_med').value;

	$.ajax({
		url:"medecin/deleteMed.php",
		type:"POST",
		datatype:"html",
		data: {
			id_med:id_med
		},
		success: function(result){
			loadPartialMenu("medecin");
		}
	});
}