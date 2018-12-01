<?php
/*
//$tableau = array();
$tableau = [];
$tableau[1]="Voiture"; //Manuellement
$tableau[]="Maison"; //automatique
$tableau['enfant'] = 'clement';
$tableau[] = 'Test';
$tableau[9.5] = 'Test2';
array_push($tableau, 1);
array_push($tableau, ['porte']);

$tableau2 = ['Sam', 'dAVID','vero', ['test']];
$tablea4 = ['cle' => 'Sam', 'cle2' => 'dAVID', 'vero', ['test']];
$tableau3 = [];

array_push($tableau3, 'Sam', 'dAVID','vero');


echo "<pre>";
print_r($tablea4);

$prenoms = [
  0 =>'Roger',
  1 => 'Andrew', 'Hervé', 'Patrice', 'Françoise'];

echo $prenoms[0].'<br>';
echo $prenoms[1].'<br>';
echo $prenoms[2].'<br>';
echo $prenoms[3].'<br>';
echo $prenoms[4].'<br>';

echo "<pre>";
print_r($prenoms);

$personne = [
  'nom'=> 'Roger',
  'prenom'=> 'Bernard',
  'age'=> '20 ans',
  'civilité'=> 'belge',
  'adresse'=> 'rue de la pomme n°11',
];

echo $personne['nom'].'<br>';
echo $personne['prenom'].'<br>';
echo $personne['age'].'<br>';
echo $personne['civilité'].'<br>';
echo $personne['adresse'].'<br>';

echo "<pre>";
print_r($personne);

$personne2  = [
  'nom' => 'Roger',
  'prenom' => 'Bernard',
  'adresse' => [
    'rue' => 'rue de la vie',
    'numero' => '18',
    'code_postal' => '7700',
  ],
];

echo $personne2['nom'].'<br>';
echo $personne2['prenom'].'<br>';
echo $personne2['adresse']['rue'].'<br>';
echo $personne2['adresse']['numero'].'<br>';
echo $personne2['adresse']['code_postal'].'<br>';


$prenoms2 = ['Oleko', 'Olivier', 'Florian', 'Johan', 'Mouadh'];

$sizeTable = count($prenoms2);

for($i=0; $i<$sizeTable; $i++){
  echo $prenoms2[$i]."<br>";
}

*/
$personneBis = [
  'nom'=> 'Roger',
  'prenom'=> 'Bernard',
  'age'=> '20 ans',
  'civilité'=> 'belge',
  'adresse'=> 'rue de la pomme n°11',
];

foreach($personneBis as $key => $value) {
  echo $key.' '. $value.'<br>';
}
