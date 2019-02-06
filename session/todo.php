<?php
session_start();
//Initialisation du tableau todo
if(isset($_SESSION['todo']) === false) {
  echo 'message';
  $_SESSION['todo']= [];
}

//récupération des données
if(isset($_POST['todo'])) {

  print_r($_SESSION['todo']);
}


?>

<form action="" method="post">
  <input name="todo" type="text">
  <input type="submit" value="Enregistrer"/>
</form>
