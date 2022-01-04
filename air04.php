<?php


function delete_repeat(string $str)
{
    $newString = "";
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] != $str[$i - 1]) {
            $newString .= $str[$i];
        }
    }
    return $newString;
}

echo delete_repeat($argv[1]); echo "\n";

