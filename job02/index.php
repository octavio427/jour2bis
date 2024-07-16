<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
         
    <?php
        
        $nombreoff = false;
        //$texte = "n'est pas dans le tableau";
        //$supnombres = > 1337 ;

            for($i = 0; $i <= 1337; $i ++){

                //elseif ($i > 1337){
                 //echo  $texte;
                //}

                if($i ==26 ){
                echo $nombreoff;
                }

                    elseif( $i ==37){
                        echo $nombreoff;
                    }
                
                        elseif( $i ==88){
                            echo $nombreoff;
                        }

                            elseif( $i ==1111){
                                echo $nombreoff;
                            }

                                elseif( $i ==3233){
                                    echo $nombreoff;
                                }

                                    else{
                                        echo $i . "<br>";
                                    }
            }
               

        ?>

        <?= "Fin"?>




    </div>
    
</body>
</html>