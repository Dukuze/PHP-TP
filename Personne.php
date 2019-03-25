<?php


abstract class Personne
{
	private $nom;
	private $prenom;
	private $age;
    private $adresse;
    
	function __construct($nom, $prenom, $age,$adresse)
	{
		$this -> nom = $nom;
		$this -> prenom = $prenom;
		$this -> age = $age;
        $this->adresse=$adresse ;
	}


	function setAge($age)
	{
		$this -> age = $age;
	}

	function getNom($nom)
	{
		return $this-> nom;
	}

	function getPrenom($prenom)
	{
		return $this-> prenom;
	}

	function getAge($age)
	{
		return $this-> age;
	}




function __toString(){
    
    return " Nom :". $this -> nom." <br> Prenom :". $this -> prenom."<br> Age :". $this -> age."<br> Adressse : <br>". $this->adresse."<br>";
}



}
?>