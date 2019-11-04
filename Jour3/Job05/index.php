<?php

 $str = "On nest pas le meilleur quand
on le croit mais quand on le sait";

$dic = array("voyelles"=>array("a","e","i","o","u","y","O"),"consonnes"=>array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z"));

$voyelles = 0;
$consonnes = 0;

$i = 0;


while ($i < strlen($str)) 
{
	$i2 = 0;
	$i3 = 0;
	
	if ($str[$i] == $dic["voyelles"])) 
	{
		$voyelles++;
	}

	else if ($str[$i] == $dic["consonnes"])) 
	{
		$consonnes++;
	}

	
			 
			
			$i=$i +1;
		

}

?>

<table>
	<thead>
		<th>voyelles</th><th>consonnes</th>
	</thead>
	<tr>
		<td><?php echo $voyelles;?></td>
		<td><?php  echo $consonnes;?></td>
	</tr>
</table>