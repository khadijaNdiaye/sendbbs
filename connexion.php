<?php
session_start();
  <?php
Try{
$db=new PDO("mysql:host=localhost;dbname=sendeal",   "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $e){
Die('Impossible de se connecté à la base de donnée');
}
?>
