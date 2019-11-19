<?php
if($_GET['Style'] == 'Style1')
{
   	?>
         <link rel="stylesheet" href="style1.css">
   <?php
} else if($_GET['Style2'] == 'style2'){
   ?>
      <link rel="stylesheet" href="style2.csss">
   <?php
} else if($_GET['Style3'] == 'style3'){
   ?>
   <link rel="stylesheet" href="style3.css">

<head>
	<link rel="stylesheet" href="Style1.css">
	<link rel="stylesheet" href="Style2.css">
	<link rel="stylesheet" href="Style3.css">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<body>
	<form>


<label for="pseudo">Pseudo</label>
<input name="pseudo" type="text" >




<label for="mdp">Mot de passe</label>
<input name="mdp" type="password">


<label for="confirmmdp">Confirmer Mdp</label>
<input name="confirmmdp" type="password">

<label for="date">Date de naissance</label>
<input name="date" type="date" >

<label for="nom">Nom</label>
<input name="nom" type="text">

<label for="prenom">Prénom</label>
<input nom="prenom" type="text">


<label for="mail">Email</label>
<input name="mail" type="email">




<label for="telephone">Téléphone</label>
<input nom="telephone" type="tel">



<p class="g3">Style</p>
<select name = "Style">
<option name = "Style1">Style1</option>
<option name = "Style2">Style2</option>
<option name = "Style3">Style3</option>

</select>




<a href="">
	<input type="button" value="envoyer">

</a>

</form>

</body>

<?php
if($_GET['Style'] == 'Style1')
{
   	?>
         <link rel="stylesheet" href="style1.css">
   <?php
} else if($_GET['Style2'] == 'style2'){
   ?>
      <link rel="stylesheet" href="style2.csss">
   <?php
} else if($_GET['Style3'] == 'style3'){
   ?>
   <link rel="stylesheet" href="style3.css">
<?php
} 