<?php

function insert_in_asc_array(array $arr, int $number)
{
    $outputArray = [];
    $done = false;
    for ($i = 0; $i < count($arr); $i++) {
        if (($arr[$i] < $number || $done === true) && isset($arr[$i + 1]) ) {
            $outputArray[] = $arr[$i];
         } else if ($number < $arr[$i] && $done == false) {
            $outputArray[] = $number;
            $outputArray[] = $arr[$i];
            $done = true;
        } else {
            $outputArray[] = $arr[$i];
		if(!$done){
            		$outputArray[] = $number;
        	}
	}
    }
    return $outputArray;
}

//Parsing

array_shift($argv);

$nbrToInsert = array_pop($argv);

$resultArray = insert_in_asc_array($argv, $nbrToInsert);

//Render
for ($i = 0; $i < count($resultArray); $i++) {
    echo "$resultArray[$i] ";
}
echo "\n";

