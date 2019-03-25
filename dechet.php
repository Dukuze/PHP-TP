<?php

Class TypeDéchet {

private $code ; 
private $libellé ; 
private $tarif ; // réel

function __construct ($code, $libellé, $tarif)  { 
    
    $this-> Poubelles = $Poubelles;
    $this-> libellé = $libellé;
    $this-> tarif = $tarif;
            }
 
public function getLibellé()
{
return $this->libellé;
}

/**
 * Get the value of tarif
 */ 
public function getTarif()
{
return $this->tarif;
}
}











?>