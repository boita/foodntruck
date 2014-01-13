<?php
// recherche.php : controller
$recherche = new Recherche($db);

if (isset($_POST['ajax']))
{
	$recherche->setRecherche($_POST['recherche']);
	
	try {
	
		$resultat = $recherche->recherche();
		
	} catch(Exception $e) {
	
		$erreur_chargement = $e->getMessage();
	}
}