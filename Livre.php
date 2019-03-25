<?php 

class Livre extends Oeuvre
{    
	
	private $editeur; // string
	 


	function __construct($titre,$auteurs,$editeur)
	{    
        
       // if (count($auteurs)>5) throw new Exception('La liste auteurs est sup > 5');
        parent::__construct("Livre",$titre,$auteurs);
		
		$this -> editeur = $editeur;
		
	}


	function getAuteur()
	{
		return $this-> auteur;
	}

	function getEditeur()
	{
		return $this-> editeur;
	}
function __toString(){
    
    return parent::__toString();
}


}
?>