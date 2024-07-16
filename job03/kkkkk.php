<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
   

<?php
 

$texte = "La Plateforme ";

    for ( $i = 0 ; $i <= 100; $i ++ ){
        

       if( $i == 42 ){
            echo $texte. "<br/>";
 }
           
       elseif ( $i <= 20){
            echo "<i>".$i."</i><br/>";
        }

        elseif ($i >= 25 && $i <= 50 ){
            echo "<u>".$i."</u><br/>";
        }

        else {
            echo $i. "<br/>";
        }

    }

echo "Fin";

?>

    

</body>
</html>