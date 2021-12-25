<?php
    if(isset($_GET['supprimer']) && isset($_GET['number'])){
        $id = $_GET['number'];
        $file = fopen("list_des_utilusateur.txt","r");
        $contenu = fread($file, filesize("list_des_utilusateur.txt"));

        fclose($file);
        $contenu = explode("\n", $contenu);

        unset($contenu[$id]); // supprimer le ligne
        $contenu = array_values($contenu); // ranger array
        $contenu = implode("\n", $contenu); 
        $upData = fopen("list_des_utilusateur.txt","w");
        fwrite($upData, $contenu);

        header("refresh:2;url=list_des_utilusateur.php");
    }

?>