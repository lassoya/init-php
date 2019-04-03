<?php
session_start();
const MAX_ESSAIS = 10;
$_SESSION['essais'] = isset($_SESSION['essais']) ? $_SESSION['essais'] : 0;
//$_SESSION['essais'] = $_SESSION['essais'] ?? 0;

$mots  = [
  "coquelicot",
  "cinema",
  "patate",
  "reminiscence",
  "chat",
  "doubleur",
  "chinoises",
  "bijouterie"
];

if($_SESSION['essais'] === 0) {
/*  if(isset($_SESSION['mot'])){
    header('refresh: 5; url= index.php');
    echo "vous avez perdu";
    exit;
  }*/

  $position = rand(0, count($mots)-1);
  $_SESSION['mot'] = $mots[$position];

  $explodeWord = str_split($_SESSION['mot']);

  $_SESSION['lettres_mot'] = array_unique($explodeWord);

  $_SESSION['essais'] = MAX_ESSAIS;
  $_SESSION['lettres_utilisees'] = [];

} else if(isset($_POST['lettre'])) {

  //stocker la lettre si elle n'existe pas dans lettres utilisées
  if(in_array($_POST['lettre'], $_SESSION['lettres_utilisees'])) {
    echo  "Vous avez déjà utilisé cette lettre";
  } else {
    $_SESSION['lettres_utilisees'][] = $_POST['lettre'];

    if(strpos($_SESSION['mot'], $_POST['lettre']) !== false) {
      echo 'oui';
    } else {
      $_SESSION['essais']--;
      echo 'non';
    }
  }
}
?>

<br>
<div> Il vous reste <strong><?= $_SESSION['essais'] ?></strong> essais </div>

<form action="" method="post">
<?php
  $detail = [];
  for($i=0; $i<strlen($_SESSION['mot']); $i++) {
    $detail[] = '_';
  }
  echo implode($detail, ' ');
 ?>
  <div>
    <label>Lettre</label>
    <input maxlength="1" type="text" name="lettre" value="">
  </div>
  <div>
    <input type="submit" value="Envoyer">
  </div>
</form>
