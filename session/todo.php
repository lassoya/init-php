<?php
session_start();

//RESET TODO LIST
if(isset($_GET['reset'])) {
  $_SESSION['todo'] = [];
}

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

<br>
<a href="?reset=1">RESET</a>
<br>


<?php
echo "<h1>TODO LIST</h1>";
echo "<ul>";
foreach($_SESSION['todo'] as $todo) {
  echo '<li>'.$todo.'</li>';
}
echo "</ul>";
