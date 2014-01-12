<?php
$PARAM_PDO_HOST = 'localhost';
$PARAM_PDO_NOM = 'jvfluxduck';
$PARAM_PDO_USER = 'jvfluxduck';
$PARAM_PDO_PASSWORD = '01W;FXUcxw7Z';
	
try {

	$db = new PDO('mysql:host=' . $PARAM_PDO_HOST . ';dbname=' . $PARAM_PDO_NOM, $PARAM_PDO_USER, $PARAM_PDO_PASSWORD);
	$db->exec("SET CHARACTER SET utf8");

} catch(PDOException $e) {

	echo "<pre>Erreur de connexion à la base de données : " . $e->getMessage() . "</pre>\n";
	exit();
}