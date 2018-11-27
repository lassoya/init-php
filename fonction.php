<?php
/*
function maPremiereFonction($nom, $prenom) {
  echo "Salut $nom $prenom";
}

$nom = "Test";
$prenom = "Test2";
maPremiereFonction($nom, $prenom);
maPremiereFonction('lassoie', 'Samuel');

exit();


function addition($nb1, $nb2) {
    echo ($nb1+$nb2).'<br />';
}


function calcul($nb1, $nb2, $operateur){
  if($operateur == '+'){
    echo ($nb1+$nb2).'<br>';
  } else if($operateur == '-'){
    echo ($nb1-$nb2).'<br>';
  } else if($operateur == '/'){
    echo ($nb1/$nb2).'<br>';
  }
}


function calcul2(int $nb1, int $nb2, string $operateur = '-') {
  switch($operateur){
      case '+':
            echo ($nb1+$nb2).'<br>';
        break;
      case '/':
            echo ($nb1/$nb2).'<br>';
        break;
      case '-':
            echo ($nb1-$nb2).'<br>';
        break;
  }
}

calcul2(5, 6);
calcul2(5, 8);



function appel(string $nom, string $prenom = '-'){
  return "Bonjour $nom $prenom <br>";
}

$maVariable = appel('Samuel');

echo '@'. $maVariable;


*/
function concat($string1, $string2){
  return $string1 . $string2;
}

echo 'test1'.'test2';
echo concat('test1', 'test2');





// créer une fonction
