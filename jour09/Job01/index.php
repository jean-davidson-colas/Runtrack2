<?php 
//creation de la connexion a la base de donnée 
$connexion= mysqli_connect ("localhost","root","","jour08");

//preparation de  la requete 
$requete = "SELECT * FROM etudiants";
$requete1 = "SHOW COLUMNS  FROM etudiants"; ;
//execution de la requete 
$query = mysqli_query ($connexion, $requete);
$query1 = mysqli_query ($connexion, $requete1);

//recuperation du resultat de l'execution 
$resultat = mysqli_fetch_all($query,MYSQLI_ASSOC);
$resultat1 = mysqli_fetch_all($query1,MYSQLI_ASSOC);

//affichage resultat 
/*var_dump($resultat);

mysqli_close($connexion);*/

?>

<table>
<thead>
    <th>
        <td>ID</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Date de naissance</td>
        <td>Genre</td>
        <td>Email</td>
    </th>
</thead>
        <tr>
            <?php foreach ($resultat as $random)
        {    echo "<tr>";
            foreach($random as $value)
            {
                echo "<td>".$value."</td>";
            }
        }
        

            
         
             
         while ($resultat1 = mysqli_fetch_array($query1,MYSQLI_ASSOC) )
         {
            ?>
        
        <tr>
            <td> <?php echo $resultat1['ID'] ; ?></td>
            <td> <?php echo $resultat1['nom'] ; ?> </td>
            <td> <?php echo $resultat1['prenom'] ?> </td>
            <td> <?php echo $resultat1['naissance'] ; ?> </td>
            <td> <?php echo $resultat1['sexe'] ; ?> </td>
            <td> <?php echo $resultat['email'] ; ?> </td>
        </tr>
<?php } ?>
         </table>