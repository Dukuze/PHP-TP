<?php

Class Habitation {

private $Poubelles ;// ARRAY 
private $unUsager ; // type user
private $adresse ; 

function __construct ($Poubelles, $unUsager, $adresse)  { 
    
    $this-> Poubelles = $Poubelles;
    $this-> unUsager = $unUsager;
    $this-> adresse = $adresse;
            }



            // SET A RAJOUTER 


public function getPoubelles()
{
return $this->Poubelles;
}

public function getunUsager()
{
return $this->unUsager;
}

public function getCout($an,$mois)
{
return $this->getPoubelles

}

function ajoutePoubelle($Poubelles) {


}

}











?>