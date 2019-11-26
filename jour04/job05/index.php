<form method="post" action="index.php">

<label>Username</label>
<input type="text"  name="nom">

<label>Password</label>
<input type="password"  name="nm">



<input type="submit" value="ok" >

</form>


	<?php
	
	if ($_POST== true) //si le formmulaire est rempli

{
	
	
	if ($_POST["nom"] == "john" && $_POST["nm"] == "rambo") //condition si tout les données sont egal a ce que je veux
	{
		echo "C 'est pas ma guerre!!";
	}
	else 
	
		echo "Votre pire cauchemar";
	
}

?>