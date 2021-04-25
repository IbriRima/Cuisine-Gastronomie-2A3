

function Verif()
{

    var numero = document.getElementById('numero').value;
    var password = document.getElementById('password').value;


    if(numero=="")
    {
        document.getElementById('labelnumero').innerHTML="Tapez votre numéro de téléphone!";
        return false; 
    }
    else
    if(password=="")
    {
        document.getElementById('labelmdp').innerHTML="Tapez votre mot de passe!";
        return false;
    }
    return true;


    

    

}
