<?php
setcookie('nbvisite');




if (isset($_POST['nbvisite'])) 
{
	$_COOKIE['nbvisite']++;
	
}




if (isset($_POST["bt"])) 
{
	$_COOKIE['nbvisite'] = 0;
}

echo $_COOKIE['nbvisite'];



?>

<form method="POST" action="index.php">



	<input type="submit" value="ok" name="bt">
</form>