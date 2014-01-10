<?php
// connexion.php : controller
$connexion = new Connexion($db);

if (isset($_POST['ajax']))
{
	$connexion->setMail($_POST['mail']);
	$connexion->setPassword($_POST['password']);
	
	try {
	
		$connexion->authentification();
		
		$cookie['expire'] = time()+3600*24*365;
		$cookie['path'] = '/';
		$cookie['domain'] = 'foodntruck.com';
		
		$cookie['contenu'] = $connexion->getMail() . '$' . time() . '$' . sha1('^' . $connexion->getMail() . time());

		setrawcookie('kayak', $cookie['contenu'], $cookie['expire'], $cookie['path'], $cookie['domain']);
		
	} catch(Exception $e) {
	
		$erreur_chargement = $e->getMessage();
	}
}