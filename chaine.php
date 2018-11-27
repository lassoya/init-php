<?php
$prenom = 'thomas';


echo ucfirst($prenom) . '<br>';
$prenomMaj = strtoupper($prenom);
echo $prenomMaj. '<br>';
echo strtolower($prenomMaj);


//exercice
$texte = ' Portes ouvertes l\'ecole au travail ';
// 1 supprimer le premier espace de la chaine
echo ltrim($texte);
// 2 supprimer l'espace de la fin de chaine
echo rtrim($texte);
// 3 supprimer les espaces de début et de fin de chaine
echo trim($texte);
// 4 supprimer tous les espaces de la chaine
echo str_replace('  ', ' ', $texte);


$nombre =1000;

echo '<br>'.number_format($nombre, 2, ',', ' ');
