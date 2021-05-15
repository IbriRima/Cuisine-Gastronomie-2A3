function verifingredient()
{
    var letters = /^[A-Za-z]+$/;
    var numbers = /^[0-9]+$/;
var div_Nom_igd = document.getElementById('verifnomigd');
var div_Type_igd = document.getElementById('veriftypeigd');
var div_Prix_igd = document.getElementById('verifprixigd');



const form=document.getElementById("form");
form.addEventListener("submit", function(evenement) {


    if (document.getElementById('Type_Igd').value === '') {
        evenement.preventDefault();
        div_Type_igd.innerHTML = "Vous devez choisir le type de votre ingredient!";
        document.getElementById("Type_Igd").focus();
    }
    else div_Type_igd.innerHTML="";

    if (document.getElementById('Nom_Igd').value== '') {
        evenement.preventDefault();
        div_Nom_igd.innerHTML = "Vous devez entrer le nom de l ingredient!";
        document.getElementById("Nom_Igd").focus();
    }

    else div_Nom_igd.innerHTML="";



    



        if (document.getElementById('Prix_Igd').value== "") {

            evenement.preventDefault();
            div_Prix_igd.innerHTML = "Vous devez entrer le prix de l ingredient !";
            document.getElementById("Prix_Igd").focus();


        }

        else

        div_Prix_igd.innerHTML='';



});

}
