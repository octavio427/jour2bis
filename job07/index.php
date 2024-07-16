<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

<?php
$hauteurprincipal = 5;
$hauteur = $hauteurprincipal + 1 ;
$largeur = 10 ;
$trgauche = "/";
$moitier = $largeur / 2 ;
$trdroite = "\\";
$trbas = "_";

//triangle gauche et doites
for ( $i = 1 ; $i <= $hauteur; $i ++ ){
      echo "</br>";
    
        for( $j = 0; $j <= $hauteur - $i; $j ++ ){
            echo  "&nbsp;"."&nbsp;";
            //echo $trdroite;
        }

            //cote gauche
            if ($i == 1) {
            } 
            
                else {
                echo "/";

                    //cote droit
                    for ($k = 1; $k <= (2 * $i - 3); $k++) {
                        echo "&nbsp;"."&nbsp;"; 
                    }
                    echo "\\";
                    }

 }

 echo "</br>";

    // largeur bas
    for( $i= 0; $i <= $largeur; $i++ ){
    echo $trbas; 
    
    }


?>


    
</body>
</html>