<?php
	
	
function leetspeak($str)

{
	$i = 0;

	while ($i < strlen($str)) 
	{
		

		if ($str[$i] == "A") 
		{
			 $str[$i] = "4";
		}
		if ($str[$i] == "B") 
		{
			 $str[$i] = "8";
		}
		if ($str[$i] == "E") 
		{
			 $str[$i] = "3";
		}
		if ($str[$i] == "G") 
		{
			 $str[$i] = "6";
		}
		if ($str[$i] == "L") 
		{
			 $str[$i] = "1";
		}
		if ($str[$i] == "S") 
		{
			 $str[$i] = "5";
		}
		if ($str[$i] == "T") 
		{
			 $str[$i] = "7";
		}

		$i++;
	}

	return $str;
}



$texte = leetspeak("BONJOUR JE M'APPELLE DEVON");
echo $texte;


?>