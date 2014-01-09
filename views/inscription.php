<?php
// inscription.php : view

if (isset($_POST['ajax']) && $_POST['ajax'] == true)
{
	if (!isset($erreur_chargement))
	{
		if (isset($erreur['message']) && count($erreur['message']) > 0)
		{
			$return = array(
				'inscription' => false,
				'erreurs' => $erreur['message']
			);		
		}
		else
		{
			$return = array('inscription' => true);
		}
	}
	else
	{
		$return = array(
			'inscription' => false,
			'erreurs' => array($erreur_chargement)
		);
	}
}
else
{
	$return = array('inscription' => false);
}

echo json_encode($return);
