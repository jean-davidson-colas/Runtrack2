<?php 
//creation de la connexion a la base de donnée 
$connexion= mysqli_connect ("localhost","root","","jour08");

//preparation de  la requete 
$requete = "SELECT * FROM etudiants";

//execution de la requete 
$ = mysqli_query ($connexion, $requete);

//recuperation du resultat de l'execution 
$resultat = mysqli_fetch_all($query);

//affichage resultat 
var_dump($resultat);

mysqli_close($connexion);


?>