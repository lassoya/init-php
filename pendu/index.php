<?php
session_start();

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


$_SESSION['mot'] ='test';//
$_SESSION['essais'] ='';//
$_SESSION['lettres_utilisees'] ='';//

echo $_SESSION['mot'];
