<?php
//EXERCICE n°1
$civilite = ['Monsieur', 'Madame', 'Mademoiselle', 'Non-binaire'];
$hobby = ['voyage', 'lecture', 'sport', 'natation'];
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
  $taille = isset($_POST['taille']) && empty($_POST['taille']) == false ? $_POST['taille'] : 'N/A';


//  echo $nom . ' ' . $prenom. ' '. $date_de_naissance. ' ' .$taille;
}
?>
<html>
  <head>
    <style></style>
  </head>
  <body>
  <form action="" method="POST">
    <div>
      <label>Civilité</label>
  <?php
      //EXERCICE n°2
      foreach($civilite as $value) {
        echo '<input type="radio" '.
        (isset($_POST['civilite']) && $_POST['civilite'] == $value  ? 'checked' : '' ).' name="civilite" value="' . $value . '"> '. $value;
      }
  ?>

    </div>
    <div>
      <label for="nom" >Nom</label>
      <input value="<?= isset($_POST['nom']) ? $_POST['nom'] : '' ?>" id="nom" type="text" name="nom">
    </div>
    <div>
      <label for="prenom">Prénom</label>
      <input value="<?= isset($_POST['prenom']) ? $_POST['prenom'] : '' ?>" id="prenom" type="text" name="prenom">
    </div>
    <div>
      <label for="date_de_naissance">Date de naissance</label>
      <input id="date_de_naissance" value="<?= isset($_POST['date_de_naissance']) ? $_POST['date_de_naissance'] : '' ?>" type="date" name="date_de_naissance">
    </div>
    <div>
      <label for="taille">Taille</label>
      <select name="taille">
        <?php
          for($i=0; $i<=200; $i++) {
            echo "<option ". (isset($_POST['taille']) && $i== $_POST['taille'] ? 'selected': '')." value='$i'>$i cm</option>";
          }
         ?>
      </select>
      </div>

      <div>
        <label for="message">Message</label>
        <textarea id="message" name="message">
          <?= isset($_POST['message']) ? $_POST['message'] : '' ?>
        </textarea>
      </div>

      <div>
        <label for="hobby">Hobby</label>
        <select name="hobby" id="hobby">
        <?php
          foreach($hobby as $value) {
            echo "<option value='$value'>$value</option>";
          }
          //for($i=0; $i<count($hobby);$i++){
          //  echo "<option value='".$hobby[$i]."'>".$hobby[$i]."</option>";
          //}

         ?>
       </select>
      </div>

    <div>
      <button type="reset">Reset</button>
      <button type="submit">Envoyer</button>
    </div>
  </form>

<?php if($_POST): ?>
  <div style="border: 1px solid #CCC; background: #EEE">
    <?php
      foreach($_POST as $key => $value):
        echo '<strong>' . $key . '</strong> : ' .$value . '<br>';
      endforeach;
     ?>
  </div>
<?php endif ?>
</body>
</html>
