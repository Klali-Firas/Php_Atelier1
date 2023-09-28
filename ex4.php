<?php
$nom="klali";
$pre="firas";

//un seule ligne:
echo $nom." ".$pre."<br>";

//deux lignes:
echo $nom."<br>".$pre."<br>";

//tableau HTML:
echo ("<table border><tr><th>Nom</th><th>prenom</th></tr><tr><td>$nom</td><td>$pre</td></tr></table><br>");


$info=$nom." ".$pre;
echo "<script>alert('$info');</script>"

?>