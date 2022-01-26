<?php
require "classes/Voiture.php";

$maVoiture = new Voiture(5,5);


$maVoiture->turn();
$maVoiture->turn();
$maVoiture->move(6);
$maVoiture->turn();
$maVoiture->move(2);

$monBateau = new Bateau(2,2);
$monBateau->turn();
$monBateau->move(2);


// var_dump($maVoiture);

echo "ma voiture est positionnée : $maVoiture";

echo "\n\n$monBateau";