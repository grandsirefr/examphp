<?php

include 'examphp.php';
//tableau que l'on veut envoyer a l'objet
$array_number=[-20,-3,-5,-14,-25,-63,-21,-45,-58];
//appel de l'objet ArrayManager
$test=new ArrayManager($array_number);
//on envoie le tableau que l'on veut dans la méthode setter
//$test->setArray($array_number);
//on lmance la méthode pour trouver le plus grand nombre
//$test->findStrongerNumber();
// on affiche le résultat avec la méthode get qui permet de récupérer une propriété a l'extèrieure de la class
echo($test->getNbStronger());