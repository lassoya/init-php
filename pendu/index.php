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

if($_SESSION['essais'] == 0) {
  $position = rand(0, count($mots)-1);
  $_SESSION['mot'] = $mots[$position];

  $_SESSION['lettre_mot'] = [];  

  $_SESSION['essais'] = MAX_ESSAIS;
  $_SESSION['lettres_utilisees'] = [];
}

echo $_SESSION['mot'];
