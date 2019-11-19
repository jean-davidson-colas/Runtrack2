<?php
session_start();


if (isset($_SESSION['nbvisite'])) {
	$_SESSION['nbvisite']++;
}




if (isset($_POST["bt"])) {
	$_SESSION['nbvisite'] = 0;
}

echo $_SESSION['nbvisite'];



?>

<form method="POST" action="index.php">



	<input type="submit" value="ok" name="bt">
</form>