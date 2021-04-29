function verifplat()
{    
  ;
    alert('type:  ');
    var letters = /^[A-Za-z]+$/;
    var numbers = /^[0-9]+$/;
var div_Nom_Plat = document.getElementById('verifnomplat');
var div_Type_plat = document.getElementById('veriftypeplat');
var div_Prix_plat = document.getElementById('verifprixplat');
var div_Nbr_Clri_plat = document.getElementById('verifnbrclri');
var div_Pds_Portion_plat = document.getElementById('verifpdsportion');



const form=document.getElementById("form");
form.addEventListener("submit", function(evenement) { 
    if (document.getElementById('Nom_Plat').value == "") {
        evenement.preventDefault();
        div_Nom_Plat.innerHTML="- Vous devez entrer un nom";
        document.getElementById("Nom_Plat").focus();
    }
    else if  (document.getElementById('Nom_Plat').match(letters)) {
        evenement.preventDefault();
        div_Nom_Plat.innerHTML="- le nom doit contenir que des lettre";
        document.getElementById("Nom_Plat").focus();
    }
    else  div_Nom_Plat.innerHTML ="";



    if (document.getElementById('Type_plat').value == "") {
        evenement.preventDefault();
        div_Type_plat.innerHTML="- Vous devez entrer un type de plat";
        document.getElementById("Type_plat").focus();
    }
    else if  (document.getElementById('Type_plat').match(letters)) {
        evenement.preventDefault();
        div_Type_plat.innerHTML="- le type doit contenir que des lettre";
        document.getElementById("Type_plat").focus();
    }
    else  div_Type_plat.innerHTML ="";

    if (document.getElementById('Prix_plat').value == "") {
        evenement.preventDefault();
        div_Prix_plat.innerHTML="- Vous devez entrer une prix!";
        document.getElementById("Prix_plat").focus();
    }
else if (document.getElementById('Prix_plat').value == "0") {
        evenement.preventDefault();
        div_Prix_plat.innerHTML="- Vous devez entrer une prix!";
        document.getElementById("Prix_plat").focus();
    }
    else  if (document.getElementById('Prix_plat').value.match(numbers)) {
        evenement.preventDefault();
        div_Prix_plat.innerHTML="- le prix ne peut contenir que des nombres ";
        document.getElementById("Prix_plat").focus();
    }
    else  div_Prix_plat.innerHTML ="";

    if (document.getElementById('Nbr_Clri_plat').value == "0") {
        evenement.preventDefault();
        div_Nbr_Clri_plat.innerHTML="- Vous devez entrer une prix!";
        document.getElementById("Nbr_Clri_plat").focus();
    }
   else if (document.getElementById('Nbr_Clri_plat').value.match(numbers)) {
        evenement.preventDefault();
        div_Nbr_Clri_plat.innerHTML="- le nombre de calorie ne peut etre que des nombres ";
        document.getElementById("Nbr_Clri_plat").focus();
    }
    else  div_Nbr_Clri_plat.innerHTML ="";


    if (document.getElementById('Pds_Portion_plat').value == "0") {
        evenement.preventDefault();
        div_Pds_Portion_plat.innerHTML="- Vous devez entrer une prix!";
        document.getElementById("Pds_Portion_plat").focus();
    }
   else if (document.getElementById('Pds_Portion_plat').value.match(numbers)) {
        evenement.preventDefault();
        div_Pds_Portion_plat.innerHTML="- le nombre de calorie ne peut etre que des nombres ";
        document.getElementById("Pds_Portion_plat").focus();
    }
    else  div_Nbr_Clri_plat.innerHTML ="";



});

}