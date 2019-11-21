<form method="get" action="index.php">

<label>Largeur</label>
<input type="text"  name="Largeur">

<label>Hauteur</label>
<input type="text"  name="Hauteur">




<input type="submit" value="ok" >

</form>


	<?php

   

	if ($_GET == true) 

{
	
	
	if ($_GET["Largeur"] == 10 ) 
	{
		echo " ";
	}
	if ($_GET["Hauteur"] == 5) 
	{
		
	}
	
	
}