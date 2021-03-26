<?php
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $firstname = [];
 $lastname  = [];
 $email     = [];
 $adress    = [];


 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['firstname'] ) ) {
    $firstname =  $_SESSION['firstname'] ;
 }else {
    $_SESSION['firstname'] =  $firstname;
 }

 if( isset( $_SESSION['lastname'] ) ) {
    $lastname =  $_SESSION['lastname'] ;
 }else {
    $_SESSION['lastname'] =  $lastname;
}

 if( isset( $_SESSION['email'] ) ) {
    $email =  $_SESSION['firstname'] ;
 }else {
    $_SESSION['email'] =  $email;
 }
 
 if( isset( $_SESSION['adress'] ) ) {
    $adress =  $_SESSION['adress'] ;
 }else {
    $_SESSION['adress'] =  $adress;
 }

 // Ajouter le nom du nom dans le tableau
 $firstname[] = $_GET["firstname"] ;
 $lastname[] = $_GET["lastname"] ;
 $email[] = $_GET["email"] ;
 $adress[] = $_GET["adress"] ;


 // Enregistrer le tableau dans la session
$_SESSION['firstname'] =  $firstname;
$_SESSION['lastname'] =  $lastname;
$_SESSION['email'] =  $email;
$_SESSION['adress'] =  $adress;

?>

<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="row">
    <div class="col-md-3">
<h1>First Names</h1>
<ul>
    <?php
        foreach ($firstname as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ul>
</div>
<div class="col-md-3">
<h1>Last Names</h1>
<ul>
    <?php
        foreach ($lastname as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ul>
</div>
<div class="col-md-3">
<h1>Emails</h1>
<ul>
    <?php
        foreach ($email as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ul>
</div>
<div class="col-md-3">
<h1>Adresses</h1>
<ul>
    <?php
        foreach ($adress as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ul>
</div>
</div>






	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>