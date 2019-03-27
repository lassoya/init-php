<?php
session_start();
const MAX_ESSAIS = 10;

$mots  = [
  "coquelicot",
  "cinema",
  "patate",
  "reminiscence",
  "chat",
  "doubleur",
  "chinoises",
  "bijouterie"
];


$position = rand(0, count($mots)-1);
$_SESSION['mot'] = $mots[$position];
$_SESSION['essais'] = 0;
$_SESSION['lettres_utilisees'] = [];


echo $_SESSION['mot'];
