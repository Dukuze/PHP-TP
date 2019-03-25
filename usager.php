<?php

Class Usager {

private $code ;
private $nom ;
private $prénom ;



function __construct ($code, $nom, $prénom)  { 
    
$this-> code = $code;
$this-> nom = $nom;
$this-> prénom = $prénom;
		}


public function getCode()
{
return $this->code;
}
/**
 * Get the value of prénom
 */ 


/**
 * Get the value of nom
 */ 
public function getNom()
{
return $this->nom;
}

public function getPrénom()
{
return $this->prénom;
}

}








?>