

<form method="$_GET" action="index.php">

<label>nom</label>
<input type="text"  name="nom">

<label>nm</label>
<input type="text"  name="nm">

<label>prenom</label>
<input type="text"  name="prenom">

<label>age</label>
<input type="text"  name="age">

<label>ecole</label>
<input type="text"  name="ecole">


<input type="submit" value="ok" >

</form>

<table>
	<thead>
		<th>arguments</th>
		<th>valeur</th>
	</thead>
	<?php

	foreach ($_GET as $key => $value) 
{
	echo
	"<tr>
		<td>".$key."</td>
		<td>".$value."</td>
	</tr>";

}
?>