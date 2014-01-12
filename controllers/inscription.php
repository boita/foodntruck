<?php
// inscription.php : controller

$inscription = new Inscription($db);

$liste_champs = array(
	'mail' => 'Vous devez indiquer une adresse mail.',
	'password_confirm' => 'Vous devez confirmer votre mot de passe.',
	'cgu' => "Vous devez accepter les conditions générales d'utilisation.",
	'password' => 'Vous devez indiquer un mot de passe.'
);

foreach ($liste_champs as $champ => $erreur) $ajout_html[$champ] = NULL;

$erreur = array('message' => NULL);

if (isset($_POST['ajax']) && $_POST['ajax'] == true)
{
	foreach($liste_champs as $nom_champ => $champ_erreur)
	{
		if (isset($_POST[$nom_champ]) && !empty($_POST[$nom_champ]))
		{
			try {
				
				$nom_methode['setter'] = "set" . ucfirst($nom_champ);
				
				$inscription->$nom_methode['setter']($_POST[$nom_champ]);

				if ($nom_champ != 'password_confirm')
				{
					$nom_methode['valide'] = "is" . ucfirst($nom_champ) . "Valide";
					$inscription->$nom_methode['valide']();
				}
			
			} catch(Exception $e) {
				
				$erreur['message'][$nom_champ] = $e->getMessage();
			}
		}
		else
		{
			$erreur['message'][$nom_champ] = $champ_erreur;
		}
			
		$nom_methode['getter'] = "get" . ucfirst($nom_champ);
		
		// $ajout_html[$nom_champ]	= 'value="' . htmlspecialchars($inscription->$nom_methode['getter']()) . '"';
		// if (isset($erreur['message'][$nom_champ]) && count($erreur['message'][$nom_champ]) > 0) $ajout_html[$nom_champ] .= ' class="input_erreur"';
	}
}

// si il n'y a aucune erreur générée par verifications.php, on enregistre les informations
if (isset($_POST['ajax']) && count($erreur['message']) == 0)
{
	try {
		
		$inscription->ajoutMembre();
	
	} catch(Exception $e) {
		
		$erreur_chargement = $e->getMessage();
	}
}

// if (isset($_COOKIE['reivilo']))
// {
	// $erreur_chargement = $messages[$MASTER_URL['langue']]['contenu']['contenu-erreur-inscription'] . '.';
// }