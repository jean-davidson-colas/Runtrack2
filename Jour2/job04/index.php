<?php

$nombre = 1;
$text= "laplateforme";
$text2= "fizz";
$text3= "buzz";

while ($nombre != 101) 

{

if( $nombre < 101)

	echo "$nombre";
	echo "<br/>";
	$nombre++;

if ($nombre % 3 == 0 && $nombre % 5 != 0 ) 
{ 
 		echo "$text2";
 		echo "<br/>";
 		$nombre++;// $nb est un multiple de trois
}

if ($nombre % 5 == 0 && $nombre % 3 != 0) 
{ 
 	echo "$text3";
 	echo "<br/>";
	$nombre++;// $nb est un multiple de cinq
}

if ($nombre % 5 == 0 && $nombre % 3 == 0 ) 
{ 
 	echo $text3."".$text2;
 	echo "<br/>";
	$nombre++;// $nb est un multiple de cinq et de trois 
}




}

?>