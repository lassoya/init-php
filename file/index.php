<?php

$fichier = fopen('file.txt', 'r+');

while($ligne = fgets($fichier)){
  echo $ligne.'<br>';
}

fseek($fichier, 0);
fputs($fichier, 'MAURICE2' . PHP_EOL);

fclose($fichier);
