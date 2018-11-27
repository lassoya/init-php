<?php
/*
$nombre = 0;

while($nombre<50){
//  echo ($nombre+1) . ' Message<br>';
  //$nombre++;
//  $nombre = $nombre + 1;
    $nombre +=2;
}

$nombre = 1;

echo "Table de multiplication 5<br>";
while($nombre<=10){
  echo "$nombre * 5 = ".($nombre*5).'<br>';
  $nombre++;
}


$nombre=1;
while($nombre<=10){
  echo "Table de multiplication de $nombre <br>";
  //reinitialiser le nombre2
  $nombre2 =1;
  echo "nombre2 = ($nombre2)<br>";
  while($nombre2<=10) {
    echo "$nombre2 * $nombre = " .($nombre2*$nombre).'<br>';
    $nombre2++;
  }
    $nombre++;
}



do {
  echo 'test';
} while(false);

while(false) {
  echo 'test2';
}



for($nombre=0 ; $nombre<100 ; $nombre++){
    echo 'c\'est bientot la fin du cours <br>';
}


$nombre = 1;
while(10>=$nombre){
  echo "$nombre<br>";
  $nombre++;
}

for($i=1;$i<=10; $i++){
  echo "$i<br>";
}


for($i=0; $i<=100; $i +=0.5){
  echo "$i <br>";
}


$i = 0;
while($i<=100){
  echo "$i <br>";
  $i +=0.5;
}



for($i=0; $i<5; $i++){
  for($e=0; $e<5; $e++){
    echo "O";
  }
  echo "<br>";
}

echo "<div style='text-align: center'>";
for($i=0;$i<5;$i++){
  for($e=0;$e<($i+1);$e++){
      echo "O";
  }
  echo "<br>";
}
echo "</div>";

//EXERCICE N°1
for($i=0;$i<=6;$i++) {
  for($j=0;$j<=10;$j++){
    echo $i;
  }
  echo "<br>";
}


//EXERCICE N°2
//$i vaut 3
for($i=1;$i<=7;$i++){
  //for($j=0;$j<3;$j++)
  for($j=0;$j<$i;$j++){
    echo "$i";
  }
  echo "<br>";
}

//EXERCICE N°3
//$i=3
for($i=0;$i<=7;$i++){
  for($j=0;$j<7;$j++){
    //3> 0
    //3> 1
    //3> 2
    if($i>$j){
        echo $i;
    } else {
      echo "0";
    }
  }
  echo "<br>";
}

//EXERCICE n°4
$nb = 20;
while($nb>=1){
  echo "$nb ";
  if($nb%3 == 0){
    echo "<br>";
  }
  $nb--;
}
*/

$nb = 20;
$nb2 = 0;
while($nb>=1){
  echo "$nb ";
  $nb2++;
  if($nb2 == 3){
    echo "<br>";
    $nb2 = 0;
  }

  $nb--;
}
