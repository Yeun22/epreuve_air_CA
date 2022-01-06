<?php
$arrayDeScript = [
    [
        "nom"              => "air00.php",
        "arguments"        => "Bonjour les gars",
        "sortieAttendue"   => ["Bonjour", "les", "gars"],
        "result"           => ""
    ],
    [
        "nom"              => "air01.php",
        "arguments"        => "Hello a tous ' '",
        "sortieAttendue"   => ["Hello", "a", "tous"],
        "result"           => ""
    ],
];


$error =0;
foreach($arrayDeScript as $script)
{
    $output = null;
    exec("$script['nom'] $script['arguments']", $output);
    if($output == $script['sortieAttendue'])
    {
        echo "test $script['nom'] : success ! \n";
    }else{
        echo "test $script['nom'] : error \n";
        $error++;
    }
}
if($error>0){
    echo "Il y $error à régler ! \n";
}
