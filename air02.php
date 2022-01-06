<?php

function concat_array_to_string(array $arr, string $separator)
{
    $outputString = "";
    foreach ($arr as $key => $value) {
        if ($key == (count($arr) - 1)) {
            $outputString .= "$value";
        } else {
            $outputString .= "$value$separator";
        }
    }
    return $outputString;
}


//Parsing
array_shift($argv);
$sep = array_pop($argv);
$result = concat_array_to_string($argv, $sep);

//Render
echo $result;
echo "\n";
