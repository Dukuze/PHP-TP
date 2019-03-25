<?php
include 'Oeuvre.php';
include 'Personne.php';
include 'Livre.php';
include 'Adherent.php';
include 'Auteur.php';
include 'Adresse.php';
$auteur = new Auteur("Rowling", "Joanne" , 53 ,5 );
$adresse =  new Adresse(5,"boulevard champs-Elysées", "Evry",9100);
$adherent = new Adherent("Da Costa", "Nicolas",23,$adresse);
$listeAuteur = array();
$listeAuteur[]= $auteur ;
$livre = new Livre("Harry Potter", $listeAuteur, "Bloomsbury Publishing");

 $adherent ->emprunterOeuvre($livre);
echo $adherent ;

$adherent ->rendreOeuvre("Livre1");
echo "Afficher l'adherent après l'appel de la fonction  rendre Oeuvre";
echo $adherent ;




?>