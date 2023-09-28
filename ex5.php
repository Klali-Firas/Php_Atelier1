<?php
echo "<h1>Calcul sur les variables</h1>";
$tva=0.2;
$prix=150;
$nombre=10;


// Le prix HT par article
$prixHT = $prix *$nombre;

// Le prix TTC par article
$prixTTC = $prixHT * (1+ $tva);

// Le prix HT total pour les 10 articles
echo "Le prix hors taxe : ".$prixHT * $nombre."<br>";

// Le prix TTC total pour les 10 articles
echo "Le prix TTC : ".$prixTTC * $nombre;
?>