<?php
$larg = "_";
$haut = "|";
$largeur = 30;
$hauteur = 20;

// Print the top line (width)
for ($i = 0; $i < $largeur; $i++) {
    echo $larg;
}

echo "<br>";
// Print the left and right sides (height)
for ($i = 0; $i < $hauteur; $i++) {
    echo $haut;
    for ($j = 0; $j < $largeur - 2; $j++) {
        echo "&nbsp;"; // Add spaces for the inner part
    }
    echo $haut;
    echo "<br>";
}

// Print the bottom line (width)
for ($i = 0; $i < $largeur; $i++) {
    echo $larg;
}
?>