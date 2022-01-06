<?php

function my_pyramide($symbole, $lvl)
{
    $nbrSymboles = 1;
    $nbrSpaces = $lvl ;
    for ($i = 0; $i < $lvl; $i++) {
        for ($j = 0; $j < $nbrSpaces; $j++) {
            echo " ";
        }
        for ($j = 0; $j < $nbrSymboles; $j++) {
            echo "$symbole";
        }
        $nbrSymboles += 2;
        $nbrSpaces = $nbrSpaces - 1;
        echo "\n";
    }
}

//errors: 

if(strlen($argv[1]) != 1){
	echo "le symbole doit être d'un seul charactère \n";
	return;
}


my_pyramide($argv[1],$argv[2]);
