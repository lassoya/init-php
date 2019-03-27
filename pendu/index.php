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

if($_SESSION['essais'] == 0) {
  $position = rand(0, count($mots)-1);
  $_SESSION['mot'] = $mots[$position];

  $explodeWord = str_split($_SESSION['mot']);

  $_SESSION['lettres_mot'] = array_unique($explodeWord);

  $_SESSION['essais'] = MAX_ESSAIS;
  $_SESSION['lettres_utilisees'] = [];
} else if(isset($_POST['lettre'])) {
  //verifier que la lettre se trouve dans le mot
  echo $_SESSION['mot'].'<br>';

  if(strpos($_SESSION['mot'], $_POST['lettre']) !== false) {
    echo 'oui';
  } else {
    echo 'non';
  }
}


?>

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
