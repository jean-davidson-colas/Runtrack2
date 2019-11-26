<?php

	$a = 10;
	
	$operation ='+';
	
	$b = 10 ;

function calcule($a, $operation, $b)

{
	if ($operation = '+' ) 

	{
		$resultats = $a + $b;

	}
	
	else if ($operation= '-') 
	{
		$resultats = $a - $b;
	}

	else if ($operation= '%') 
	{
		$resultats = $a % $b;
	}

	else if ($operation= '*') 
	{
		$resultats = $a * $b;
	}
	return($resultats);
}


$a2 = calcule($a, $operation, $b);

echo $a2;



















?>
