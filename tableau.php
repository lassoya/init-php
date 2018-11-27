<?php


$metiers = ["infirmier", "plombier"]; // tableau vide metiers
$enfants = array("David", "Samuel", "Valentin");
$enfants[0] = "Jonathan"; //on ajoute un élément au tableau
array_push($enfants, 'Véronique', 'Andrew');

$tableau = [
'ville' => 'Mouscron',
//'entier' => 15,
'float' => 10.22,
'booleen' => true,
 10 => 'enter',
];

echo "<pre>";
print_r($metiers); //affichage du tableau avec print_r()
print_r($enfants);

var_dump($tableau);

$taille = count($tableau);
echo 'Taille du tableau ' . $taille;
