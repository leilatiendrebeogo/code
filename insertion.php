<?php


require_once 'connection.php';

$nom=$_POST["nom"];
$prenom=$_POST['prenom'];
$naissance=$_POST['naissance'];
$contact=$_POST['contact'];
$formation=$_POST['formation'];

$preparation=$db-> prepare('INSERT INTO apprenants(nom,prenom,naissance,contact,formation) VALUES(?,?,?,?,?)' );
$data =array($nom,$prenom,$naissance,$contact,$formation);
$preparation->execute($data);

header('Location:liste.php');

 ?>
   
