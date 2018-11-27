<?php
$size = count($_GET);
if($size != 0) {
  echo "Formulaire envoyé ! <br />";
  $nbre1 = $_GET['nombre1'];
  echo $nbre1;
}
?>




<form action="" method="GET">
  <input type="text" name="nombre1" > -
  <input type="text" name="nombre2" >
  <input type="submit" value="Envoyer">
</form>
