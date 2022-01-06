<?php

//functions


function findTheOne(array $arr)
{
    foreach ($arr as $key => $value) {
        $nbr = $value;
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == $nbr && $key != $i) {
                array_splice($arr, $i, 1);
            }
        }
    }
    return $arr[0];
}


//Parsing
array_shift($argv);
$result = findTheOne($argv);

//Render
echo "$result \n";
