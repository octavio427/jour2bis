<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

  $larg = "_";
  $haut = "|";
  $largeur = 20 ;
  $hauteur = 10 ;
  

//largeur haut
for ( $i = 0 ; $i <= $largeur; $i ++ ){
    echo $larg ;
 }
    echo "<br/>" ;

        //hauteur gauche & droite
        for ( $i = 0 ; $i <= $hauteur; $i ++ ){
           echo $haut ;
        
            for ($j = 0; $j < $largeur ; $j++) {
            echo  "&nbsp;"."&nbsp;"; 
            }
                echo $haut;
                echo "<br/>" ;
        }
            
                //largueur bas
                for ( $i = 0 ; $i <= $largeur; $i ++ ){
                    echo $larg ;
                }
    

?>



</body>
</html>
