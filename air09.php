<?php

function rotate_to_left(array $arr)
{
    $outOnLeft = array_shift($arr);
    $arr[] = $outOnLeft;

    return $arr;
}

array_shift($argv);
$resultArray = rotate_to_left($argv);


for ($i = 0; $i < count($resultArray); $i++) {
    echo "$resultArray[$i] ";
}
echo "\n";
