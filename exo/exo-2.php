<?php

//EXO n°1
$nom = [
  'Toto',
  'Roger',
  'Maurice',
  'David',
  'Veronique',
  'Toto',
  'René',
  'Roger'
];

$nomBis = [];
//$nomBis = array();
foreach($nom as $value) {
  if(!in_array($value, $nomBis)) {
    echo "$value<br>";
    $nomBis[]=$value;
  //array_push($nomBis, $value);
  }
}


echo "<br>";
echo "<br>";
//EXO N°2
$fruit = [
      'Banane',
      'Pomme',
      'Poire',
      'Cerise',
      'Fraise',
      'Framboise'
    ];


foreach($fruit as $value) {
  if(stripos($value, 'b')!==false) {
      echo $value.'<br>';
  }
}
