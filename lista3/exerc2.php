<?php

$palavras = "Harry Styles";
$vogais = array("A", "E", "I", "O", "U", "a", "e", "i", "o", "u");
$substX = str_replace($vogais, "X", $palavras);

echo "Substituindo as vogais por X, as palavras ficam da seguinte forma: " .$substX;
?>
