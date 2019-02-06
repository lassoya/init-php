<?php
session_start();
//setcookie('pseudo', 'TOTO2', time() + 365*24*3600);setcookie('pseudo', 'TOTO2', time() + 365*24*3600);

//echo $_SESSION['nom'];

echo $_COOKIE['pseudo'];
