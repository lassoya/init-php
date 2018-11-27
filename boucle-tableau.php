<?php
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
