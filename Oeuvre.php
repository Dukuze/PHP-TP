<?php

 abstract class  Oeuvre {
  private static $cpt = 1; 
	private $code ; // string
	private $titre; //  string
    private $estDispo; // true ou false boolean
    private $auteurs ;// Array 

function __construct($code,$titre,$auteurs)
	{
    
   if (count($auteurs)<1) throw new Exception('La liste auteurs est vide');
		$this -> code = $code."".self::$cpt++;
		$this -> titre = $titre;
        $this -> estDispo = TRUE;
        $this -> auteurs = $auteurs;
		
	}
    
    
	function setEstDispo($estDispo)
	{
		$this -> estDispo = $estDispo;
	}

	function getEstDispo()
	{
		return $this-> estDispo;
	}
    function setCode($code)
	{
		$this -> code = $code;
	}
	function getCode()
	{
		return $this-> code;
	}
    function setTitre($titre)
	{
		$this -> titre = $titre;
	}
	function getTitre()
	{
		return $this-> titre;
	}
     function __toString(){
    
    return "<br>Titre: ". $this->titre."<br>Code: ". $this->code."<br>Etat:  ". $this->estDispo;
}
}
?>