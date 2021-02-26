function Information(){
  
           var Name = document.getElementById("name").value;
            document.getElementById("affiche").innerHTML += "<b id=op>Nom:</b>&nbsp;" + Name + "<br>";

           var Phone = document.getElementById("phone").value;
            document.getElementById("affiche").innerHTML += "<b id=op>Téléphone:</b>&nbsp;" + Phone + "<br>";

           var Email = document.getElementById("email").value;
            document.getElementById("affiche").innerHTML += "<b id=op>Email:</b>&nbsp;" + Email + "<br><br>";
          

        }

