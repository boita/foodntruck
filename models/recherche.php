<?php
// recherche.php : model

class Recherche extends init
{
	private $_recherche;
	
	public function __construct($db)
	{
		parent::__construct($db);
		$this->_recherche = "";
	}
	
	// setters
	public function setRecherche($recherche)
	{
		$this->_recherche = $recherche;
	}

	// getters
	public function getMail()
	{
		return $this->_recherche;
	}
	
	// méthodes
	public function recherche()
	{
		$nth = $this->_db->prepare("SELECT fc_id, fc_nom FROM foodtruck_camions WHERE fc_nom LIKE :recherche");
		$nth->bindValue(":recherche", '%' . $this->_recherche . '%', PDO::PARAM_STR);
		
		if ($nth->execute())
		{
			$result = $nth->fetchAll(PDO::FETCH_ASSOC);
			
			return $result;
		}
		else
		{
			throw new Exception("Problème inconnu lors de la recherche.");
		}
	}
}