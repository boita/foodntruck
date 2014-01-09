<?php
// inscription.php : model

class Inscription extends init
{
	private $_mail;
	private $_cgu;
	private $_password;
	private $_password_confirm;
	
	public function __construct($db)
	{
		parent::__construct($db);
		$this->_mail = "";
		$this->_cgu = "";
		$this->_password = "";
		$this->_password_confirm = "";
	}
	
	// setters
	public function setMail($mail)
	{
		$this->_mail = $mail;
	}
	
	public function setCgu($cgu)
	{
		$this->_cgu = $cgu;
	}
	
	public function setPassword($password)
	{
		$this->_password = $password;
	}
	
	public function setPassword_confirm($password_confirm)
	{
		$this->_password_confirm = $password_confirm;
	}
	
	// getters
	public function getMail()
	{
		return $this->_mail;
	}
	
	public function getCgu()
	{
		return $this->_cgu;
	}
	
	public function getPassword()
	{
		return $this->_password;
	}
	
	public function getPassword_confirm()
	{
		return $this->_password_confirm;
	}
	
	// méthodes
	public function ajoutMembre()
	{
		$nth = $this->_db->prepare("INSERT INTO foodtruck_utilisateurs (fu_mail, fu_password, fu_confirm_compte) VALUES (:mail, :mot_de_passe, :confirmation)");
		
		$nth->bindParam(':mail', $this->_mail, PDO::PARAM_STR);
		$nth->bindParam(':mot_de_passe', sha1('R' . $this->_password), PDO::PARAM_STR);
		$nth->bindValue(':confirmation', '0', PDO::PARAM_STR);
		
		if ($nth->execute())
		{
			return true;
		}
		else
		{
			throw new Exception("Problème lors de l'enregistrement des données.");
		}	
	}

	public function isMailValide()
	{
		$test_mail = $this->_db->prepare('SELECT fu_mail FROM foodtruck_utilisateurs WHERE fu_mail = :email LIMIT 1');
		$test_mail->bindParam(':email', $this->_mail, PDO::PARAM_STR);
		$test_mail->execute();

		if ($test_mail->rowCount() > 0)
		{
			throw new Exception('Cette adresse mail est déjà utilisée.');
		}
		
		if (!preg_match('#^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $this->_mail))
		{
			throw new Exception("Le format de l'adresse mail n'est pas valide.");
		}
	}
	
	public function isCguValide()
	{
		if ($this->_cgu == 'false' || $this->_cgu != 'true')
		{
			throw new Exception("Vous devez accepter les conditions générales d'utilisation.");
		}
	}
	
	public function isPasswordValide()
	{
		if ($this->_password != $this->_password_confirm)
		{
			throw new Exception('Les deux mots de passe entrés sont différents.'.$this->_password_confirm);
		}
		
		if (strlen($this->_password) > 30 || strlen($this->_password) < 6)
		{
			throw new Exception('Le mot de passe doit être contenu entre 6 et 30 caractères.');
		}
		
		if (preg_match("#[\s'\"]#", $this->_password))
		{
			throw new Exception('Mot de passe invalide');
		}
	}
}