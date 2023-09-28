<?php
$a = 5 ;
if(is_integer($a) && ($a<10 && $a>5) && ($a%2==0))
echo "vrai";
else echo "faux<br>";
//faux

$b="TRUE";
$c=FALSE;
echo($b AND $c)?1:0; //0
echo ($b OR $c)?1:0;//1

$nom="";
$sexe="M";
echo($nom=="")?"inconnu":$nom;//inconnu
echo (($sexe=="F")?"madame":"monsieur");//monsieur

$nom= "Cherif";
echo $nom ?? "inconnu";//cherif
echo "bounjour".($prenom ?? "inconnu");//bonjour inconnu
echo "bounjour".($prenom ?? $nom ??"inconnu");//bonjour cherif


?>