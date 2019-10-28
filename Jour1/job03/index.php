<?php
$prenom = "Marc";
$age = "40";
$taille= "1.75";
$val= null; 
$myBool = false;
$array = ["premiere val", "foo"];


?>


<table>
	<thead>
		<tr>
		<th>Type</th>
		<th>nom</th>
		<th>valeur</th>
		</tr>
	</thead>
	<tr>
		<td>String</td>
		<td>$prenom</td>
		<td><?php  echo $prenom?></td>
	</tr>
	<tr>
		<td>Nbr a virgule</td>
		<td>$taille</td>
		<td><?php  echo $taille?></td>
	</tr>
	<tr>
	<td>Nombre</td>
	<td>$age</td>
	<td><?php  echo $age?></td>
	</tr>
	<tr>
	<td>Null</td>
	<td>$val</td>
	<td><?php  echo $val?></td>
	</tr>
	<tr>
	<td>Boolean</td>
	<td>$myBool</td>
	<td><?php  echo $myBool?></td>
	</tr>
	<tr>
	<td>Tableau</td>
	<td>$array</td>
	<td><?php  echo $array[0]?></td>
	</tr>
</table>