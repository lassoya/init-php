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
