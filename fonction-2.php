<?php

function calculCube(float $longueur): float {
  return ($longueur*$longueur*$longueur);
}

//echo calculCube(4);


function noms(): array {
  return [
    "Toto",
    "Roger",
    "Bernard"
  ];
}

$noms = noms();

print_r($noms[1]);


function compter(int $nb1, int $nb2): array {
  $tab = [];
  //$tab = array();
  for($nb1; $nb1<=$nb2;$nb1++){
    $tab[] = $nb1;
  }

  return $tab;
}


echo implode(', ', compter(0, 10));
