<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
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
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_GET['modifier']) && isset($_GET['data'])):
        $data = $_GET['data'];
?>
    <div class="container form-group main-form neds-validation"  align='center'>
        <h1>Modification :</h1>
        <form action="validation_modification_agenda.php" class="main-from needs-validation" method="post">
		   <div>
            <input type="number" name="upData[]" value="<?php echo $data[0];?>" hidden>
			</div><br><br>
			 <div class="form-group">
		    <label for="exampleInputEmail">Nom</label><br>
            <input type="text" name="upData[]" class="form-control" value="<?php echo $data[1];?>">
			</div><br><br>
			 <div>
		    <label for="exampleInputEmail">Téléphone</label><br>
            <input type="tel" name="upData[]" class="form-control" value="<?php echo $data[2];?>">
			</div><br><br>
			 <div>
		    <label for="exampleInputEmail">E-mail</label><br>
            <input type="email" name="upData[]" class="form-control" value="<?php echo $data[3];?>">
			</div><br><br>
			<div>
            <input type="submit" value="Modifier" name="valider_modification" class="btn btn-primary btn-success" onclick="return confirm('êtes vous sûre ?');">
			</div><br><br>
        </form>
        <a href="list_des_utilusateur.php"><button class="btn btn-primary mb-2" onclick="return confirm('Vous allez Quitter la page sent modification ?')">Afficher les contenues</button></a>
    </div>
<?php
    endif;
?>
</body>
</html>