<?php
    if(isset($_POST['valider_modification']) && $_POST['upData']){
        $newLign = '';
        $newData = $_POST['upData'];
        $id = $newData[0];
        foreach($newData as $key => $element){
            if($key != 0){
                if($key ==3){$newLign .="$element";}
                else{$newLign .="$element:";}
            }
        }

        
        $file = fopen("list_des_utilusateur.txt","r");
        $contenu = fread($file, filesize("list_des_utilusateur.txt"));

        fclose($file);
        $contenu = explode("\n", $contenu);
        $contenu[$id]=$newLign;

        $contenu = implode("\n", $contenu);
        $upData = fopen("list_des_utilusateur.txt","w");
        fwrite($upData, $contenu);

        header("refresh:2;url=list_des_utilusateur.php");
    }
?>