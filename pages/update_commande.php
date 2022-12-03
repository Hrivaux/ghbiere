<?php
	require_once 'sql.php';


	$id_commande  = $_POST['id_commande'];
	$numero_user = $_POST['numero_user'];
	$date_com = $_POST['date_com'];
	$Mode_paiement = $_POST['Mode_paiement'];
		
	
	 $requete = "UPDATE commande SET "; 
		
	if (!empty ($numero_user)) {
		$requete=$requete."numero_user = '$numero_user',";
	}
	
	if (!empty ($date_com)) {
		$requete=$requete."date_com = '$date_com',";
	}
	
	if (!empty ($Mode_paiement)) {
		$requete=$requete."Mode_paiement = '$Mode_paiement',";
	}
	
	$requete = substr($requete, 0, -1)." WHERE id_commande  = '$id_commande' ";
	
	
	
	if ($bdd->exec($requete))
	{
		echo "Modification rÃ©ussie";
	}
	else 
	{
		echo "Une erreur est survenue";
	}
?>