<?php

$nombre = 0;
$text= "laplateforme";

for ($nombre=0; $nombre <20 ; $nombre++) 
{ 
	echo "<i>$nombre</i>";
	echo "<br/>";
}

for ($nombre; $nombre <25 ; $nombre++) 
{ 
	echo "$nombre";
	echo "<br/>";
}




for ($nombre; $nombre <=50 ; $nombre++) 
{ 
	
	
	if ($nombre == 42) 
{ 
	echo $text;
	echo "<br/>";
	
}
	else  
	{
	
	echo "<u>$nombre</u>";
	echo "<br/>";
	}


}



?>