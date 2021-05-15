function verifplat()
{    
    var letters = /^[A-Za-z]+$/;
    var numbers = /^[0-9]+$/;
var div_Nom_Plat = document.getElementById('verifnomplat');
var div_Type_plat = document.getElementById('veriftypeplat');
var div_Prix_plat = document.getElementById('verifprixplat');
var div_Nbr_Clri_plat = document.getElementById('verifnbrclri');
var div_Pds_Portion_plat = document.getElementById('verifpdsportion');



const form=document.getElementById("form");
form.addEventListener("submit", function(evenement) { 

   
    if (document.getElementById('Type_plat').value === 'Choisissez un type de plat') {
        evenement.preventDefault();
        div_Type_plat.innerHTML = "Vous devez choisir le type de votre plat!";
        document.getElementById("Type_plat").focus();
    }
    else div_Type_plat.innerHTML="";

    if (document.getElementById('Nom_Plat').value== '') {
        evenement.preventDefault();
        div_Nom_Plat.innerHTML = "Vous devez entrer le nom de plat!";
        document.getElementById("Nom_Plat").focus();
    }
    else div_Nom_Plat.innerHTML="";



    if (document.getElementById('Nbr_Clri_plat').value== "") {

        evenement.preventDefault();
        div_Nbr_Clri_plat.innerHTML = "Vous devez entrer le nombre de calorie!";
        document.getElementById("Nbr_Clri_plat").focus();
    
    
    }
    
    else
       
        div_Nbr_Clri_plat.innerHTML='';
        if (document.getElementById('Pds_Portion_plat').value== "") {

            evenement.preventDefault();
            div_Pds_Portion_plat.innerHTML = "Vous devez entrer le poids de portion !";
            document.getElementById("Pds_Portion_plat").focus();
        
        
        }
        
        else
           
        div_Pds_Portion_plat.innerHTML='';



        if (document.getElementById('Prix_plat').value== "") {

            evenement.preventDefault();
            div_Prix_plat.innerHTML = "Vous devez entrer le poids de portion !";
            document.getElementById("Prix_plat").focus();
        
        
        }
        
        else
           
        div_Prix_plat.innerHTML='';



});

}