<?php
// connexion.php : view

if (isset($_POST['ajax']) && $_POST['ajax'] == true)
{
	if (!isset($erreur_chargement))
		$return = array('connexion' => true);	
	else
		$return = array('connexion' => false);
}
else
{
	$return = array('connexion' => false);
}

echo json_encode($return);