<?php
//DEMARRAGE SESSION
session_start();

//VERIFIER COOKIE EXISTE
if(isset($_COOKIE['compteur'])) {
   $newIndex = $_COOKIE['compteur'] + 1;
   setcookie('compteur', $newIndex, time()+3600);
   echo 'vous êtes venus ' . $_COOKIE['compteur'] . ' fois sur le site' ;
} else {
  setcookie('compteur', 1, time()+3600);
}



//RESET TODO LIST
if(isset($_GET['reset'])) {
  $_SESSION['todo'] = [];
}

//RESET Element dans la liste
if(isset($_GET['delete'])) {
  $index = $_GET['delete'];
  unset($_SESSION['todo'][$index]);
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

<form action="todo.php" method="post">
  <input name="todo" type="text">
  <input type="submit" value="Enregistrer"/>
</form>

<br>
<a href="?reset=1">RESET</a>
<br>


<?php
echo "<h1>TODO LIST</h1>";
echo "<ul>";
foreach($_SESSION['todo'] as $index => $todo) {
  echo '<li><a href="?delete=' . $index . '">X</a> '.$todo.'</li>';
}
echo "</ul>";
