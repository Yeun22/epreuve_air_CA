<?php
function sort_two_arraySort(array $arrA, array $arrB)
{
    $outputArray = [];
    // On prends valeur un de a et valeur un de b
    //Le plus petit vas dans le tableau et on incrémente celui ci
    $a = 0;
    $b = 0;
    do {
        if ($arrA[$a] < $arrB[$b]) {
            $outputArray[] = $arrA[$a];
            $a++;
        } else {
            $outputArray[] = $arrB[$b];
            $b++;
        }
    } while ($a < count($arrA) && $b < count($arrB));
    //Si un tableau est fini ($i = count($arr)-1)
    //alors pour j = la valeur truc jusqu'à la fin on met le reste
    if ($a == count($arrA)) {
        //Signifie que A est vide
        for ($i = $b; $i < count($arrB); $i++) {
            $outputArray[] = $arrB[$i];
        }
    }
    if ($b == count($arrB)) {
        //Signifie que B est vide
        for ($i = $a; $i < count($arrA); $i++) {
            $outputArray[] = $arrA[$a];
        }
    }


    return $outputArray;
}

function ceate_two_array_with_key($arrayToSplit, $key)
{
    $split = false;
    $arrayA = [];
    $arrayB = [];
    for ($i = 0; $i < count($arrayToSplit); $i++) {
        if ($arrayToSplit[$i] === $key) {
            $split = true;
        } elseif (!$split) {
            $arrayA[] = $arrayToSplit[$i];
        } elseif ($split) {
            $arrayB[] = $arrayToSplit[$i];
        }
    }
    return [$arrayA, $arrayB];
}

//Gestion d'erreur : 
$valable = false;
foreach ($argv as $value) {
    if ($value = "fusion") {
        $valable = true;
    }
}
if (!$valable) {
    echo "Il manque le mot clé fusion \n";
    return;
}

//Parsing

array_shift($argv);

$bigArray = ceate_two_array_with_key($argv, 'fusion');

$arrayA = $bigArray[0];
$arrayB = $bigArray[1];

$resultArray = sort_two_arraySort($arrayA, $arrayB);

for ($x = 0; $x < count($resultArray); $x++) {
    echo "$resultArray[$x] ";
}
echo "\n";
