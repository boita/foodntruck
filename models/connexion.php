<?php
// connexion.php : model

class Connexion extends init
{
	private $_mail;
	private $_password;
	
	public function __construct($db)
	{
		parent::__construct($db);
		$this->_mail = "";
		$this->_password = "";
	}
	
	// setters
	public function setMail($mail)
	{
		$this->_mail = $mail;
	}
	
	public function setPassword($password)
	{
		$this->_password = $password;
	}
	
	// getters
	public function getMail()
	{
		return $this->_mail;
	}
	
	public function getPassword()
	{
		return $this->_password;
	}
	
	// méthodes
	public function authentification()
	{
		$nth = $this->_db->prepare("SELECT fu_mail, fu_password FROM foodtruck_utilisateurs WHERE fu_mail = :mail AND fu_password = :mot_de_passe");
		$nth->bindParam(":mail", $this->_mail, PDO::PARAM_STR);
		$nth->bindValue(":mot_de_passe", sha1('~.>(};&:!.>+@$#-[_?}*.<-^^{#-@/-{}^+]_<-!>!?=~-<[*@*' . $this->_password), PDO::PARAM_STR);
		
		if ($nth->execute())
		{
			if ($nth->rowCount() != 1)
			{
				throw new Exception("Le mot de passe et/ou l'adresse mail sont incorrects.");
			}
		}
		else
		{
			throw new Exception("Le mot de passe et/ou l'adresse mail sont incorrects.");
		}
		
		return true;
	}
}