<?php

 //fizzbuzz
//ecrire les nombres de 0 a 100 
//remplacer les multiples de 3 par fizz 

$i = 0;
$fizz = "fizz<br/>";
$buzz = "buzz<br/>";
$fizzbuzz = "fizzbuzz<br/>";

while ( $i <= 100) 
{
	if ($i % 3 == 0 && $i % 5 == 0) 
	{ 
		echo $fizzbuzz;
		echo $i."<br/>";
		
	}

	else if ($i % 3 == 0 ) 
	{ 
		echo $fizz;
		
	}

	else if ($i % 5 == 0 ) 
	{ 
		echo $buzz;
		
	}
	
	
	$i = $i+ 1 ;
}



?>