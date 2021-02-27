function ShowName(){
    var name = document.getElementById("nom").value;
    var numero = document.getElementById("numero").value;
    var email = document.getElementById("email").value;

    document.getElementById("resultat").innerHTML += "Name:&nbsp&nbsp&nbsp"+name+"<br>";
 
    document.getElementById("resultat").innerHTML += "Number:&nbsp&nbsp&nbsp"+numero+"<br>";

    document.getElementById("resultat").innerHTML += "Email:&nbsp&nbsp&nbsp"+email+"<br>"+"<br>"+"<br>";

}