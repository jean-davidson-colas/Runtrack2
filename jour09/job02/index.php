<?php 
//creation de la connexion a la base de donnée 
$connexion= mysqli_connect ("localhost","root","","jour08");

//preparation de  la requete 
/*$requete = "SELECT * FROM etudiants";*/
$requete1 = "SELECT nom,capacite FROM salles";
//execution de la requete 
//$query = mysqli_query ($connexion, $requete);
$query1 = mysqli_query ($connexion, $requete1);

//recuperation du resultat de l'execution 
/*$resultat = mysqli_fetch_all($query);*/
$resultat1 = mysqli_fetch_all($query1);

//affichage resultat 
/*var_dump($resultat);

mysqli_close($connexion);*/

?>

<table>
<thead>
        <tr>
            <?php foreach ($resultat1 as $random)
        {    echo "<tr>";
            foreach($random as $value)
            {
                echo "<td>".$value."</td>";
            }
        }
     
        
            ?>
        
        </tr>

         </table>