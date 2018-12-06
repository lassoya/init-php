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
  $nom = isset($_POST['nom']) && !empty($_POST['nom']) ? $_POST['nom'] : 'N/A';
  $prenom = isset($_POST['prenom']) && empty($_POST['prenom']) == false ? $_POST['prenom'] : 'N/A';

  $date_de_naissance = 'N/A';
  if(isset($_POST['date_de_naissance']) && empty($_POST['date_de_naissance']) == false){
      $date = $_POST['date_de_naissance'];
      //1er solution
      //$date_de_naissance = date('d/m/Y', strtotime($date));
      //2eme solution
      $date_de_naissance = date_format(date_create($date), 'd/m/Y');
  }


  echo $nom . ' ' . $prenom. ' '. $date_de_naissance;
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
    <label for="date_de_naissance">Date de naissance</label>
    <input id="date_de_naissance" type="date" name="date_de_naissance">
  </div>
  
  <div>
    <button type="reset">Reset</button>
    <button type="submit">Envoyer</button>
  </div>
</form>
