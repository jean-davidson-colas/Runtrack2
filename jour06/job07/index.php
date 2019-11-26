<form method="get" action="index.php">

<label>Str</label>
<input type="text"  name="Str">

<p>Fonction</p>
<select name="Fonction">
<option>gras</option>
<option>cesar</option>
<option>decalage</option>
<option>plateforme</option>
</select>




<input type="submit" value="ok" >

</form>
<?php

	/*var_dump($_GET);
	
	$_GET["Fonction"][0]=="gras";*/

  

   function gras($str)
   {
   		
   		for ($i=0; $i < strlen($str) ; $i++) 
   		{ 
   			if (ctype_lower($str[$i])==true) 
   			{
   				echo $str[$i];

   				
   			}
   			 if (ctype_upper($str[$i])==true) 
   			{
   				while ($str[$i] != " ") 
   				{

   					echo "<b>".$str[$i]."<b>";
   					$i = $i + 1;
   				}
   			}
   		}
   	    
   	    

   }

$str = $_GET["Str"];
echo gras($str);
?>
 

   /function cesar()
   {

   	if ($_GET["str"] == 10 ) 
	{
		echo " ";
	}


   }
   function decalage()
   {

   	if ($_GET["str"] == 10 ) 
	{
		echo " ";
	}

   }
   function plateforme()
   {

   	if ($_GET["str"] == 10 ) 
	{
		echo " ";
	}

   }*/

	


	

	
	
