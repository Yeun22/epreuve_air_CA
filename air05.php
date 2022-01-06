<?php

function same_tarif_for_all(array $arr, int $add)
{
    $newArray = [];
    foreach ($arr as $id => $value) {
        $newArray[] = $value + $add;
    }
    return $newArray;
}

//Parsing
array_shift($argv);

$nbr = array_pop($argv);

$resultArray = same_tarif_for_all($argv, $nbr);

//REnder

for ($i = 0; $i < count($resultArray); $i++) {
    echo "$resultArray[$i] ";
}
echo "\n";
