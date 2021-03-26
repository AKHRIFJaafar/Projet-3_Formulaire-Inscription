
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type = "text/javascript" src = "custom.js" ></script>
    <title>Inscription</title>
</head>

<body>
    <div class="container">
        <form action="donner.php" method="POST">
            <h2 id="prototype">PROTTYPE </h2>
          
               <label id="Label" >Name</label>
               <input type="text" class="nom" name="nom" placeholder="Your Name" ><br><br>
            
                <label id="Label" >Phone</label>
                <input type="text"  class="nom" name="phone" placeholder="Your Phone" 
                ><br><br>
    
                <!-- <label id="Label" >Email</label>
                <input type="text" class="nom" placeholder="Your Email" ><br><br><br> -->

            <input type="submit" value="Ajouter" >
        </form>


    </div>


    
    
</body>
</html>