<?php
//test
try {
  $date = new DateTime();
  echo $date->format('d/m/Y');
} catch(Exception $error){
  echo 'ERROR'.$error->getMessage();
}
