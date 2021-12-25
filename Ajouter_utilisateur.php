<?php

$nom=$_POST['nom'];
$email=$_POST['eml'];
$tel=$_POST['tel'];

$fp = fopen("list_des_utilusateur.txt","a+"); // ouverture du fichier en écriture
fputs($fp, $nom.":".$tel.":".$email."\n"); // on écrit le nom et email dans le fichier
fclose($fp);
header("refresh:2;url=ajouter utilisateur (2).html");
?>
