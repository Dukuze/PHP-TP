<?php 

class Adherent extends Personne
{
	private $numadherent;
	private static $cptadherent  = 1;
	private $empruntOeuvre; //Array


	function __construct($nom,$prenom,$age,$adresse)
	{      
        
        parent::__construct($nom,$prenom,$age,$adresse);
		$this -> numadherent = self::$cptadherent++;
		$this -> empruntOeuvre = array(); 
	}

	//GET SET a completer
function oeuvresEmpruntes(){
    
    $chaine ="";
    foreach($this->empruntOeuvre as $key=>$value ){
        
        $chaine = $chaine."Oeuvre $key <br>$value<br> ";
    }
    return $chaine ;
}

function emprunterOeuvre($oeuvre)
	{
		if(($oeuvre->getEstDispo() == 1)&& (count($this->empruntOeuvre) <5)){
            
            $oeuvre->setEstDispo(FALSE);
            $this->empruntOeuvre[]=$oeuvre;
           
            
        }
	}

function rendreOeuvre($code)
{
   foreach($this->empruntOeuvre as $key=>$value ){
      
        if ($value->getCode()===$code){
              
                $value->setEstDispo(TRUE);
                unset($this->empruntOeuvre[$key] );
                array_values($this->empruntOeuvre);
            }
        }
		
	}
function __toString(){
    
    return parent::__toString()."<br> Oeuvre emprunts : <br>". $this->oeuvresEmpruntes()."<br>";
}


}
?>