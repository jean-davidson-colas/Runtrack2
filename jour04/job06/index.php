<form method="get" action="index.php">

<label>Username</label>
<input type="text"  name="nombre">




<input type="submit" value="ok" >

</form>


	<?php
	
	if ($_GET== true) 

{
	
	
	if ($_GET["nombre"]%2 == 0) 
	{
		echo "Ce Nombre est pair";
	}
	else 
	
		echo "Ce Nombre est impair";
	
}