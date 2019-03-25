<?php 

public class Cd extends Oeuvre
{    
	
	private $realisateur; // string
	 


	function __construct($titre,$auteurs,$realisateur)
	{  
          
        if (count($auteur)>2) throw new Exception('La liste auteurs est sup > 2');
		parent::__construct("CDs",$titre,$auteurs)
		
		$this -> realisateur = $realisateur;
		
	}
    
    
    
}