<?php 

class Auteur extends Personne
{
    private $nbOeuvre ;

	function __construct( $nom ,$prenom,$age,$nblivre)
	{
		parent::__construct($nom ,$prenom,$age,null);
		$this -> nbOeuvre = $nblivre;
	}



    function __toString(){
    
    return parent::__toString()."<br> nombre de Oeuvre :". $this->nbOeuvre."<br>";
}

    
}






?>