<?php
// PHP
Class Poubelles {

private $id ; 
private $nature ; // Typedéchet 
private $Levées ; // réel

function __construct ($id, $nature, $Levées)  { 
    
    $this-> id = $id;
    $this-> nature = $nature;
    $this-> Levées = $Levées;
            }
 



        }



public function getId()
{
return $this->id;
}


public function getNature()
{
return $this->nature;
}
}

public function getCout($an,$mois)
{
    $couttotal=0;
foreach ($this ->lesLevées as $uneLevées) {
 if (($uneLevées -> getDate() -> getYear()==$an )&&(unLevée -> getDate() -> getMonth()==$month)

{

$couttotal= $coutotal

}


}


}











?>