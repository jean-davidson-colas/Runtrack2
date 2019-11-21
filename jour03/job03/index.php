<?php

$str = "I'm sorry Dave I'm afraid I can't
do that";

$str2 = "aeiouyI";

$i = 0;

while ($i < strlen($str)) 
{
	$i2 = 0;
	
	while ( $i2 < 7) 
	{
		if ($str[$i] == $str2[$i2]) 
		{
			
			echo $str[$i]."<br/>";

		}
		
		$i2=$i2 +1;
	}


		
		$i=$i +1;
		

}
?>