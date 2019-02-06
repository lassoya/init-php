<?php
session_start();
//Initialisation du tableau todo
if(isset($_SESSION['todo']) === false) {
  $_SESSION['todo']= [];
}

//récupération des données
if(isset($_POST['todo'])) {
  $_SESSION['todo'][] = $_POST['todo'];
  //array_push($_SESSION['todo'], $_POST['todo']);
}

?>

<form action="" method="post">
  <input name="todo" type="text">
  <input type="submit" value="Enregistrer"/>
</form>

<?php
echo "<br>";
foreach($_SESSION['todo'] as $todo) {
  echo $todo .'<br>';
}
