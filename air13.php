<?php

$arrayDeScript = [
    ["air00.php 'Bonjour les gars'",["Bonjour", "les", "gars"], 'air00'],
    [ "air01.php 'Hello a tous' ' '", ["Hello", "a", "tous"], 'air01'],
    [ "air02.php 'Hello' 'a' 'tous' '-'", "Hello-a-tous", 'air02'],
    [ "air03.php Hello a Hello", "a", 'air03'],
    [ "air04.php 'Hello  a'", 'Helo a', 'air04'],
    [ "air05.php 1 2 3 4 2", "3 4 5 6", 'air05'],
    [ "air06.php Michel Albert Jean t", 'Michel Jean' , 'air06'],
    [ "air07.php 1 3 4 2", '1 2 3 4' , 'air07'],
    [ "air08.php 10 20 30 fusion 15 25 35", '10 15 20 25 30 35' , 'air08'],
    ["air09.php A B C D", 'B C D A', 'air09'],
    ["air10.php air10.php", ['<?php', "",'$nom =$argv[1];',"", 'echo file_get_contents($nom);'], 'air10'],
    ["air11.php x 3", ['   x','  xxx',' xxxxx'], 'air11'],
    ["air12.php 10 6 5 22", "5 6 10 22", 'air12'],


];


$error =0;

foreach($arrayDeScript as $script)
{
	$output = null;

	exec("php " . $script[0], $output);

	if(count($output) == 1)
	{
		$compare =  $output[0];
	}else{
		$compare = $output;
	}
    if($compare == $script[1])
    {
        echo "test ".$script[2]." : success ! \n";
    }else{
	var_dump($compare);
	var_dump($script[1]);
	echo "test ".$script[2] . " : error \n";
        $error++;
    }
}
if($error>0){
    echo "Il y $error erreurs à régler ! \n";
}
