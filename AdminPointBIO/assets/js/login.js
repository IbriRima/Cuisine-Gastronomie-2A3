function VerifLogin()
{

    var numero = document.getElementById('numero').value;
    var password = document.getElementById('password').value;

    
    var error=true;

    if(numero=="")
    {
        document.getElementById('labelnumero').innerHTML="Tapez votre numéro de téléphone!";
        error= false; 

    }
    

    if(password=="")
    {
        document.getElementById('labelmdp').innerHTML="Tapez votre mot de passe!";
        error=false; 
    }
    return error;



   
}


    

    


