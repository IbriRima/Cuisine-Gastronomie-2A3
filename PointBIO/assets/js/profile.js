

function VerifClientProfile()
{

    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var email = document.getElementById('email').value;
    var adresse = document.getElementById('adresse').value;
    var numero = document.getElementById('numero').value;


    var error=true;

    if(nom=="")
    {
        document.getElementById('labelnom').innerHTML="Tapez votre nom!";
        error=false ; 
    }
    
    if(nom.includes('0')|| nom.includes('1') || nom.includes('2') || nom.includes('3') || 
    nom.includes('4') || nom.includes('5') || nom.includes('6') || nom.includes('7') ||
        nom.includes('8') || nom.includes('9')  )
    {
        document.getElementById('labelnom').innerHTML="Tapez un nom alphabétique!";
        error=false ; 
    }
    
    if(prenom=="")
    {
        // alert("Tapez votre prénom!");
        document.getElementById('labelprenom').innerHTML="Tapez votre prénom!";
        error=false ; 
    }
    if(prenom.includes('0')|| prenom.includes('1') || prenom.includes('2') || prenom.includes('3') || 
    prenom.includes('4') || prenom.includes('5') || prenom.includes('6') || prenom.includes('7') ||
    prenom.includes('8') || prenom.includes('9')  )
    {
        // alert("Tapez un prénom alphabétique!");
        document.getElementById('labelprenom').innerHTML="Tapez un prénom alphabétique!";
        error=false ; 
    }
     
    // if(email=="")
    // {
    //     document.getElementById('labelemail').innerHTML="Tapez votre email!";
    //     error=false ; 
    // }
    // else
    //  if(!email.includes('@') ||  !email.includes('.'))
    // {
    //     document.getElementById('labelemail').innerHTML="Tapez un email valide!";
    //     error=false ; 
    // }
    
     if(numero=="")
    {
        document.getElementById('labelnumero').innerHTML="Tapez votre numéro de téléphone!";
        // alert("Tapez votre numéro de téléphone!");
        error=false ; 
    }
     if(numero.length!=8)
    {
        document.getElementById('labelnumero').innerHTML="Tapez un numéro de téléphone valide!";

        // alert("Tapez un numéro de téléphone valide!");
        error=false ; 
    }
     if(adresse=="")
    {
        document.getElementById('labeladresse').innerHTML="Tapez votre adresse!";
        // alert("Tapez votre adresse!");
        error=false ; 
    }

   return error;
}




