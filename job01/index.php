<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <div>
         
        <?php
            


            for($i = 0; $i <= 1337; $i ++){

                if ( $i == 42 ) {
                    echo "<b><u>$i</u></b><br/>";
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