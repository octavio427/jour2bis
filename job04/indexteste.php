<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexteste</title>
</head>
<body>
    
<?php


for ($i = 0; $i <= 100 ; $i ++){

    if( $i % 3 == 0  && $i % 5 == 0 ){
        echo $i. " FizzBuzz, multiple de 3 & de 5.". "<br/>";
    }

        elseif($i % 3 == 0){
        echo $i. " Fizz, multiple de 3.". "<br/>";
        }

            elseif($i % 5 == 0){
                echo $i. " Buzz, multiple de 5.". "<br/>";
            }

                else {
                        echo $i. "<br>";
                }
 }
 
echo "Fin";

?>

</body>
</html>