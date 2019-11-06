<?php

$verif = 2; // variable de ref pour verifier

for ( $nbr = 0; $nbr <= 1000; $nbr += 1 )// boucle principal

{
    if ( $nbr != 1 )
    {
        while ( $nbr % $verif != 0 )//boucle secondaire qui verifie si le nmbr est  premier
        
          $verif += 1; //initialisation verif
        
        
        if ( $nbr == $verif ) //Verification et affichage 
        {
            echo "$nbr";
            echo "<br/>";
        }

        $verif = 2; //initialisation verif pour continuer la boucle
    }
}

?>