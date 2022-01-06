<?php

//On utilise un & pour dire que l'on passe en référence. Cela signifie que l'
// on ne crée pas de nouveau tableau on tri directement le tableau initial par palier en fonction des index des bornes 
function quicksort(&$arr, $left, $right)
{
    //La fonction ne se joue que si le tableau comporte + d'un élément
    if ($left < $right) {
        //On séléctionne un nombre pivot pour créer des sous tableau 
        $pivot = swippe($arr, $left, $right);
        //On trie les coté du tableau avec le pivot
        //On ne crée pas de sous tableau afin de limiter le besoin en mémoire
        quicksort($arr, $left, $pivot - 1);
        quicksort($arr, $pivot + 1, $right);
    }
}

//Cette fonction place les éléments en fonction du pivot
function swippe(&$arr, $left, $right)
{
    //On pars de l'index le plus a gauche
    $i = $left;
    // Le pivot est le dernier nombre du tableau
    $pivot = $arr[$right];
    for ($j = $left; $j <= $right; $j++) {
        if ($arr[$j] < $pivot) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            $i++;
        }
    }
    //Nouvelle valeur du pivot
    $temp = $arr[$right];
    $arr[$right] = $arr[$i];
    $arr[$i] = $temp;
    return $i;
}

//Parsing: 
array_shift($argv);

$nbrs = count($argv)-1;

quicksort($argv, 0, $nbrs);


for ($x = 0; $x < count($argv); $x++) {
    echo $argv[$x] . " ";
}
echo "\n";
