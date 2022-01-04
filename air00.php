<?php

function my_explode_function(string $str)
{
    $word = "";
    $arrArguments = [];
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == " ") {
            $arrArguments[] = $word;
            $word = "";
        } elseif (!isset($str[$i + 1])) {
            $word .= $str[$i];
            $arrArguments[] = $word;
            $word = "";
        } else {
            $word .= $str[$i];
        }
    }
    return $arrArguments;
}

//Gestion d'erreur : 
if( is_numeric($argv[1]) ) {echo "Il faut une string \n";return;}

//Parsing : 

$outputArray = my_explode_function($argv[1]);

//Affichage 
for ($w = 0; $w < count($outputArray); $w++) {
    echo "$outputArray[$w] \n";
}
