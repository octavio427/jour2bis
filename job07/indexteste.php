<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexteste</title>
</head>
<body>

<?php

$hauteur = 5; // Vous pouvez changer la hauteur du triangle ici

for ($i = 1; $i <= $hauteur; $i++) {
    // Espaces pour aligner les côtés du triangle
    for ($j = $hauteur; $j > $i; $j--) {
        echo "&nbsp;"; // Utilisation de &nbsp; pour les espaces en HTML
    }
    
    // Barres obliques pour les côtés
    if ($i == 1) {
        echo "/";
    } else {
        echo "/";
        for ($k = 1; $k <= (2 * $i - 3); $k++) {
            echo "&nbsp;"; // Espace entre les côtés du triangle
        }
        echo "\\";
    }
    
    echo "<br>"; // Nouvelle ligne après chaque rangée
}

// La base du triangle
for ($i = 1; $i <= $hauteur - 1; $i++) {
    echo "&nbsp;";
}
echo "/";
for ($i = 1; $i <= (2 * $hauteur - 3); $i++) {
    echo "_";
}
echo "\\";$hauteur = 5; // Vous pouvez changer la hauteur du triangle ici

for ($i = 1; $i <= $hauteur; $i++) {
    // Espaces pour aligner les côtés du triangle
    for ($j = $hauteur; $j > $i; $j--) {
        echo "&nbsp;"; // Utilisation de &nbsp; pour les espaces en HTML
    }
    
    // Barres obliques pour les côtés
    if ($i == 1) {
        echo "/";
    } else {
        echo "/";
        for ($k = 1; $k <= (2 * $i - 3); $k++) {
            echo "&nbsp;"; // Espace entre les côtés du triangle
        }
        echo "\\";
    }
    
    echo "<br>"; // Nouvelle ligne après chaque rangée
}

// La base du triangle
for ($i = 1; $i <= $hauteur - 1; $i++) {
    echo "&nbsp;";
}
echo "/";
for ($i = 1; $i <= (2 * $hauteur - 3); $i++) {
    echo "_";
}
echo "\\";
?>


    
</body>
</html>