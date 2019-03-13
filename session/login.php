<?php
session_start();

$username= 'etudiant';
$password = '1234';

if(isset($_GET['deconnexion'])) {
  unset($_SESSION['username']);
  header('location: login.php');
  exit;
}

if(isset($_SESSION['message'])){
  echo implode('<br>', $_SESSION['message']);
//  foreach($_SESSION['message'] as $value){
//    echo $value. '<br>';
//  }
  unset($_SESSION['message']);
}

if(isset($_POST['username'], $_POST['password'])
&& $username == $_POST['username']
&& $password == $_POST['password'] ){
  $_SESSION['username'] = $_POST['username'];
  header('location: todo.php');
} else if($_POST) {
  echo 'Vos identifiants ne sont pas corrects';
}

if(isset($_SESSION['username']) == false):
?>
<form method="post" action="">
  <div>
    <label>Username</label>
    <input type="text" name="username">
  </div>
  <div>
    <label>password</label>
    <input type="password" name="password">
  </div>
  <input type="submit" value="Connexion">
</form>
<?php
endif;
 ?>
