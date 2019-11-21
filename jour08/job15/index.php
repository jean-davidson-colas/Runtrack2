<form method="get" action="index.php">

<label>Largeur</label>
<input type="text"  name="Largeur">

<label>Hauteur</label>
<input type="text"  name="Hauteur">




<input type="submit" value="ok" >

</form>


	<?php
	$values = array(
              25,  75,  // Point 11 (x, y)
              50, 125,  // Point 10 (x, y)
              25,  175, // Point 9 (x, y)
              75,  175, // Point 8 (x, y)
              125,  200,  // Point 7 (x, y)
              175,  175,    // Point 6 (x, y)
              225,  175,  // Point 5 (x, y)
              200,  125,  // Point 4 (x, y)
              225,  75,  // Point 3 (x, y)
              175, 75, // Point 2 (x, y)
              125,  50,  // Point 1 (x, y)
              75,  75    // Point 12 (x, y)
                          );
	if ($_GET== true) 

{
	
	
	if ($_GET["Largeur"] == 10 ) 
	{
		echo $values ;
	}
	if ($_GET["Hauteur"] == 5) 
	{
		echo $values;
	}
	
	
}