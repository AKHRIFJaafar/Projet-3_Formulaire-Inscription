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
 if( isset( $_SESSION['Apprenants'] ) ) {
    $firstname =  $_SESSION['Apprenants'] ;
 }else {
    $_SESSION['Apprenants'] =  $firstname;
 }
 
 // Ajouter le Apprenants du Apprenants dans le tableau
 $firstname[] = @$_POST["firstname"] ;
 
 // Enregistrer le tableau dans la session
 $_SESSION['Apprenants'] =  $firstname;
 
 


// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['Apprenants'] ) ) {
   $lastname =  $_SESSION['Apprenants'] ;
}else {
   $_SESSION['Apprenants'] =  $lastname;
}

// Ajouter le Apprenants du Apprenants dans le tableau
$lastname[] = @$_POST["lastname"] ;

// Enregistrer le tableau dans la session
$_SESSION['Apprenants'] =  $lastname;


// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['Apprenants'] ) ) {
   $email =  $_SESSION['Apprenants'] ;
}else {
   $_SESSION['Apprenants'] =  $email;
}

// Ajouter le Apprenants du Apprenants dans le tableau
$email[] = @$_POST["email"] ;

// Enregistrer le tableau dans la session
$_SESSION['Apprenants'] =  $email;

// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['Apprenants'] ) ) {
   $adress =  $_SESSION['Apprenants'] ;
}else {
   $_SESSION['Apprenants'] =  $adress;
}

// Ajouter le Apprenants du Apprenants dans le tableau
$adress[] = @$_POST["adress"] ;

// Enregistrer le tableau dans la session
$_SESSION['Apprenants'] =  $adress;

// session_destroy();

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
    <link rel="stylesheet" media="print" href="./css/print.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Adress</th>
    </tr>
  </thead>
  <?php
  $i=0;
foreach ($_SESSION["Apprenants"] as $value) {
    if($i==0){
        echo "<tr>"; 
        echo "<td>".$value."</td>";
        $i++;
    }elseif($i<=2 ){
        echo "<td>".$value."</td>";
        $i++;
    }else{
        echo "<td>".$value."</td>";
            echo "</tr>";
            
            $i=0;
     };
}
?>
</table>





<button type="submit" class="btn  hideButton btn-light text-center" onclick="window.print()" 
>IMPRIMER</button>






	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>