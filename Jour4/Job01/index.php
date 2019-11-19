<?php

$i = 0;

foreach ($_GET as $key => $value) 
{
	
	if (isset($key)) //si il y a une valeur dans keys incremente I
	{
	 $i++;
    
	}

}
echo $i;
?>

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