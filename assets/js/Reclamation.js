function AjoutReclamation()
{    
var div_Libelle = document.getElementById('verifLibelle');
var div_Duree = document.getElementById('verifDuree');

const form=document.getElementById("form");
form.addEventListener("submit", function(evenement) { 
    if (document.getElementById('libelle').value == "") {
        evenement.preventDefault();
        div_Libelle.innerHTML ="- Vous devez entrer un libellé!";
        document.getElementById("libelle").focus();
    }
    else  div_Libelle.innerHTML ="";
   if (document.getElementById('duree').value== '') {
        evenement.preventDefault();
        div_Duree.innerHTML = "- Vous devez entrer la duree maximale de traitement!";
        document.getElementById("duree").focus();
    }
    else div_Duree.innerHTML="";
});

}


   
 
  


