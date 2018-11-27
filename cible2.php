<?php

if(isset($_GET['nb1'])){
  echo 'premier nombre envoyé';
} else if (isset($_GET['nb2'])){
  echo 'deuxième nombre envoyé';
}
else {
  echo 'rien est envoyé'; 
}

//echo $_GET['nb1'] + $_GET['nb2'];
