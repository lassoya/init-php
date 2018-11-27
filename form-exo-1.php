<?php
/*
action: permet de choisir la fichier cible
 sur lequel on va envoyer le formulaire
method: permet de choisir le type d'envoi du formulaire
GET => dans l'url ou POST => caché
input => name : permet de donner un nom au champ
du formulaire.
*/
?>

<form action="cible.php" method="GET">
  Prénom: <input type="text" name="prenom">
  Nom: <input type="text" name="nom">
  <input type="submit" value="Envoyer">
</form>
