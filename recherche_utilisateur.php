<?php
//Récupération de données
$recherche = $_POST['eml'];

$fp = fopen("list_des_utilusateur.txt","r"); // ouverture du fichier en lecture selment
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <title>LIST DES UTILISATEUR </title>
</head>
<body>



<div class="block">
        <h1><B><i>LIST DES UTILISATEUR RECHERCHEE</i></B></h1>
        <table class="table table-hover">
            <thead>
                <th scope="col">Numéro sur la list</th>
                <th scope="col">Nom</th>
                <th scope="col">Télephone</th>
                <th scope="col">E-mail</th>
                <th scope="col" colspan=2>Actions</th>
            </thead>
            <tbody> 
   
<?php // parcourir les rangs
    $fil= file("list_des_utilusateur.txt");
     $lines=preg_grep("/$recherche/",$fil);
    foreach($lines as $key =>$fil):
        $rang = preg_split("/\:/", $fil);
?>
     <tr>
                    <td scope="row"><?php echo $key; ?></td>
                    <td scope="row"><?php echo $rang[0]; ?></td>
                    <td scope="row"><?php echo @$rang[1]; ?></td>
                    <td scope="row"><?php echo @$rang[2]; ?></td>
                    <td>
                        <form action="supprimer_agenda.php" method="get">
                            <input type="number" name="number" value="<?php echo $key;?>" hidden>
                            <input type="submit" value="Supprimer" name="supprimer" class="btn btn-primary mb-2 btn-success" onclick="return confirm('êtes-vous sûre ?');">
                        </form>
                    </td>
                    <td>
                        <form action="modifier_agenda.php" method="get">
                            <input type="number" name="data[]" value="<?php echo $key;?>" hidden>
                            <input type="text" name="data[]" value="<?php  echo $rang[0];?>" hidden>
                            <input type="number" name="data[]" value="<?php  echo @$rang[1];?>" hidden>
                            <input type="email" name="data[]" value="<?php  echo @$rang[2];?>" hidden>
                            <input type="submit" value="Modifier" name="modifier" class="btn btn-primary mb-2 btn-success">
                        </form>
                    </td>
                </tr>
<?php
  endforeach;

fclose($fp); // On ferme le fichier

?>
            </tbody>
        </table>
    </div>
</body>
</html>