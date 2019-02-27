<?php

$user = 'inscription';
$pass = 'inscription2019';
try {
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=inscription_iepsm', $user, $pass);
} catch(\Exception $error){
  error_log($error->getMessage());
  echo "Erreur: connexion BDD impossible.";
}

$request = $bdd->query('select * from utilisateur');

//echo "<pre>";
//print_r($request->fetchAll(PDO::PARAM_STR));

?>

<table border="1">
  <thead>
    <tr>
      <th>id</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Genre</th>
      <th>Adresse</th>
      <th>Code postal</th>
      <th>Ville</th>
      <th>Email</th>
      <th>Téléphone</th>
      <th>Type</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    <tr>
      <td>id</td>
      <td>Nom</td>
      <td>Prénom</td>
      <td>Genre</td>
      <td>Adresse</td>
      <td>Code postal</td>
      <td>Ville</td>
      <td>Email</td>
      <td>Téléphone</td>
      <td>Type</td>
    </tr>
    ?>

  </tbody>
</table>
