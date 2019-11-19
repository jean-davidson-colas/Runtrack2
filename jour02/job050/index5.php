<?php

//recupe d'info = $_GET 
//recupe d'info personelle = $_POST
// DANS UN FORMULAIRE C 'EST L'ACTION QUI DEFINI LA PAGE A RECHERCHER ET METHOD LA FACON DE LE FAIRE


echo $_GET["ecole"];//exemple 1

$ecole= $_GET["ecole"];// recupérer les données de input name

var_dump($_GET);//affihe les donnée selectionnée

foreach ($_GET as $key => $value) 
{
	echo $cle."".$Valeur;
}

?>

<form method="get" action="test.php">

<input type="text"  name="ecole">
<input type="submit" value="ok" >

	</form>