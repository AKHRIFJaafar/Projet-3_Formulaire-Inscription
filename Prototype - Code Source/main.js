function Ajouter(){
    var Nom=document.getElementById("firstname").value;
    var Prenom=document.getElementById("lastname").value;


    document.getElementById("p").innerHTML+=`<div><span>Nom :</span>${Nom}
    <br> <span>Prenom :</span>${Prenom}</div> <br>`
}