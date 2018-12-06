<?php
//if(count($_POST)>0)
if($_POST) {
/*
  $nom = '';
  $prenom = '';
  if(isset($_POST['nom'])) {
    $nom = $_POST['nom'];
  }
  if(isset($_POST['prenom'])){
    $prenom = $_POST['prenom'];
  }
*/
  $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
  $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';

  echo $nom . ' ' . $prenom;
}

 ?>
<form action="" method="POST">
  <div>
    <label for="nom" >Nom</label>
    <input id="nom" type="text" name="nom">
  </div>
  <div>
    <label for="prenom">Prénom</label>
    <input id="prenom" type="text" name="prenom">
  </div>
  <div>
    <button type="reset">Reset</button>
    <button type="submit">Envoyer</button>
  </div>
</form>
