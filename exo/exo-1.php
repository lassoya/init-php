<?php
$marqueVoiture = [
  0 => 'audi',
  1 => 'bmw',
  2 => 'citroen',
  3 => 'peugeot',
  4 => 'volkswagen'
];

//EXERCICE N°1
$size = count($marqueVoiture);
for($i = 0; $i<$size;$i++) {
  echo strtoupper($marqueVoiture[$i]).'<br>';
}

echo "<br>EXERCICE N°2<br>";

//EXERCICE N°2
$size = count($marqueVoiture)-1;
for($i=$size;$i>=0;$i--){
  echo $marqueVoiture[$i].'<br>';
}

echo "<br>EXERCICE n°3<br>";

//EXERCICE n°3
foreach($marqueVoiture as $cle => $marque){
  echo "$cle $marque <br>";
}


//$i= count($marqueVoiture);
//while($i-- >0){
//  echo $marqueVoiture[$i].'<br>';
//}
