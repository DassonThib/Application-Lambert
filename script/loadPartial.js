
function loadPartialMenu(page) {
	switch (page) {
		case 'hopital':
			$.ajax({
				url: 'hopital/hopital_index.php',
				type: 'GET',
				dataType: 'html',
				success: function (result) {
					$('#partialView').html(result);
				}
			});
			break;
		case 'medecin':
			$.ajax({
				url: 'medecin/medecin_index.php',
				type: 'GET',
				dataType: 'html',
				success: function (result) {
					$('#partialView').html(result);
				}
			});
			break;
		case 'contrat':
			$.ajax({
				url: 'contrat/contrat_index.php',
				type: 'GET',
				dataType: 'html',
				success: function (result) {
					$('#partialView').html(result);
				}
			});
			break;
		case 'facture':
			$.ajax({
				url: 'facture/facture_index.php',
				type: 'GET',
				dataType: 'html',
				success: function (result) {
					$('#partialView').html(result);
				}
			});
			break;
		case 'planning':
			$.ajax({
				url: 'planning/planning_index.php',
				type: 'GET',
				dataType: 'html',
				success: function (result) {
					$('#partialView').html(result);
				}
			});
			break;
		case 'deco':
			document.location.href="index.php";
			break;
	}
}

function editMed(id) {
	$.ajax({
		url: 'medecin/medecin_edit.php',
		type: 'POST',
		data: 'id_med='+id,
		dataType: 'html',
		success: function (result) {
			$('#partialView').html(result);
		}
	});
}