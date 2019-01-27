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


/**
* fonction permettant de compter de x à x
*/
function compter(int $nb1, int $nb2): array {
  $tab = [];
  //$tab = array();
  for($nb1; $nb1<=$nb2;$nb1++){
    $tab[] = $nb1;
  }

  return $tab;
}

//echo implode(', ', compter(0, 10));

function triangle($a, $b){
  $calc = $a*$a + $b*$b;
  return sqrt($calc);
}
