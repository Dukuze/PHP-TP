<?php 

 class Adresse {
    
    private $num ;
    private $nomRue;
    private $ville  ;
    private $cp ;
    
    function __construct($num , $nomRue,$ville,$cp){
        
        $this->num = $num;
        $this->nomRue=$nomRue ;
        $this->ville = $ville ;
        $this->cp = $cp ;
    }
    public function __toString(){
        
        return "Nom: ".$this->num." Nom de la rue: ".$this->nomRue." Ville: ".$this->ville."Code Postal: ".$this->cp."<br>";
    }
    
    
}
?>
