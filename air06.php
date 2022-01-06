<?php

function check_if_your_not(array $arr, string $char)
{
    $outputArray = [];
    foreach ($arr as $value) {
        $charIs = false;
        for ($i = 0; $i < strlen($value); $i++) {
            if (strtolower($value[$i]) == strtolower($char)) {
                $charIs = true;
            }
        }
        if ($charIs == false) {
            $outputArray[] = $value;
        }
    }
    return $outputArray;
}

//Parsing
array_shift($argv);

$charToFind = array_pop($argv);

$resultArr = check_if_your_not($argv, $charToFind);

//Affichage
for ($n = 0; $n < count($resultArr); $n++) {
    echo "$resultArr[$n] ";
}
echo "\n";

