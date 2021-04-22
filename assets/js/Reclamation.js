

function AjoutType()
{    
  
var div_Libelle = document.getElementById('verifLibelle');
var div_Duree = document.getElementById('verifDuree');


const form=document.getElementById("form");
form.addEventListener("submit", function(evenement) { 
    if (document.getElementById('libelle').value == "") {
        evenement.preventDefault();
        div_Libelle.innerHTML="- Vous devez entrer un libellé";
        document.getElementById("libelle").focus();
    }
    else  div_Libelle.innerHTML ="";

    if (document.getElementById('duree').value == "0") {
        evenement.preventDefault();
        div_Duree.innerHTML="- Vous devez entrer une duree!";
        document.getElementById("duree").focus();
    }
    else  div_Duree.innerHTML ="";
});

}

function AjoutReclamation()
{   
   
var div_Desc = document.getElementById('verifDesc');
var div_Propo = document.getElementById('verifPropo');
var div_Type=document.getElementById('verifType');
var div_Note=document.getElementById('verifNote');
test=0

const form=document.getElementById("formR");

form.addEventListener("submit", function(evenement) { 


    if (document.getElementById('Proposition').value== '') {
        evenement.preventDefault();
        div_Propo.innerHTML = "Vous devez entrer votre proposition!";
        document.getElementById("Proposition").focus();
    }
    else div_Prop.innerHTML="";

    if (document.getElementById('Description').value == "") {
        evenement.preventDefault();
        div_Desc.innerHTML ="Vous devez décrire votre problème!";
        document.getElementById("Description").focus();
    }
    else  div_Desc.innerHTML ="";


    if (document.getElementById('Type').value === 'Choisissez un type de réclamation') {
        evenement.preventDefault();
        div_Type.innerHTML = "Vous devez choisir le type de votre réclamation!";
        document.getElementById("Type").focus();
    }
    else div_Type.innerHTML="";

Note=document.querySelectorAll('input[name="Note"]');
for (const rb of Note) {
    if (rb.checked)
     {
       test+=1;
        break;
    }
}

if(test==0)

{
    evenement.preventDefault();
    div_Note.innerHTML = "Vous devez nous attribuer une note!";
  
}
else div_Note.innerHTML="";
 
});

}
 
  

function ModifReclamation()
{    
var div_Desc = document.getElementById('verifDescModif');
var div_Propo = document.getElementById('verifPropoModif');
var div_Type=document.getElementById('verifTypeModif');
var div_Note=document.getElementById('verifNoteModif');


const form=document.getElementById("formMR");

form.addEventListener("submit", function(evenement) { 


    if (document.getElementById('Proposition').value== '') {
        evenement.preventDefault();
        div_Propo.innerHTML = "Vous devez entrer votre proposition!";
        document.getElementById("Proposition").focus();
    }
    else div_Prop.innerHTML="";

    if (document.getElementById('Description').value == "") {
        evenement.preventDefault();
        div_Desc.innerHTML ="Vous devez décrire votre problème!";
        document.getElementById("Description").focus();
    }
    else if (document.getElementById('Description').value == "") {
        evenement.preventDefault();
        div_Desc.innerHTML ="Vous devez décrire votre problème!";
        document.getElementById("Description").focus();
    } 
    
    
   else div_Desc.innerHTML ="";


    if (document.getElementById('Type').value === 'Choisissez un type de réclamation') {
        evenement.preventDefault();
        div_Type.innerHTML = "Vous devez choisir le type de votre réclamation!";
        document.getElementById("Type").focus();
    }
    else div_Type.innerHTML="";

    if (document.getElementById('Note').value== '') {
        evenement.preventDefault();
        div_Note.innerHTML = "Vous devez nous attribuer une note!";
        document.getElementById("Note").focus();
    }
    else div_Note.innerHTML="";

 
});

}

function ModifType()
{    
var div_Duree = document.getElementById('verifDureeAd');


const form=document.getElementById("formA");
form.addEventListener("submit", function(evenement) { 
   
   if (document.getElementById('duree').value== '') {
        evenement.preventDefault();
        div_Duree.innerHTML = "- Vous devez entrer la duree maximale de traitement !";
        document.getElementById("duree").focus();
    }
    else div_Duree.innerHTML="";
});

}

function DeleteAdmin()
{    
var div_Etat = document.getElementById('verifEtat');
etat=document.getElementById('Etat_traitement').value;

const form=document.getElementById("formDAdmin");
form.addEventListener("submit", function(evenement) { 
   
   if (document.getElementById('Etat_traitement').value== 'Non') {
        evenement.preventDefault();
        alert("Vous pouvez supprimer Seulement les réclamations Traitées !");
        document.getElementById("Etat_traitement").focus();
    }
    else div_Etat.innerHTML="";
});

}