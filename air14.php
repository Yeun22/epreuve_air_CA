<?php



$adjectifsTranquille = ['COOL','EASY', 'SYMPA', 'INTERESSANT', 'FUN','AMUSANT'];
$id = rand(0, count($adjectifsTranquille)-1);
$adjectifsChauds = ["GALERE", "CONTRAIGNANT SA MAMAN", "CHAUD DE OUF", "HYPER INSTRUCTIF", "DUUUUUUUUUUUUUUUUUR"];
$iddur = rand(0, count($adjectifsChauds)-1);

echo " J'ai terminé l'épreuve de l' AIR !!! C'était ... \n Comment dire ... \n ... \n ...\n Plutôt  $adjectifsTranquille[$id] ... enfin pour les premiers jusqu'au deux derniers Oui ! Le quicksort et les tests ca été vraiment $adjectifsChauds[$iddur] \n vous souhaitiez une autre réponse ? Bon relancer mon script alors ... \n";
return;
