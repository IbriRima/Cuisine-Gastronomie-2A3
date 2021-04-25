

  function Verif()
{

    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('adresse').value;
    var phonenumber = document.getElementById('numero').value;
    // var birthdate = document.getElementById('birthdate').value;
    // var male = document.getElementById('homme').checked;
    // var female = document.getElementById('femme').checked;
    var password1 = document.getElementById('mdp1').value;
    var password2 = document.getElementById('mdp2').value;

    


    

    if(nom=="")
    {
        document.getElementById('labelnom').innerHTML="Tapez votre nom!";
        return false ;
    }
    else
    if(prenom=="")
    {
        document.getElementById('labelprenom').innerHTML="Tapez votre prénom!";
        return false ;
    }

    else
    if(email=="")
    {
        document.getElementById('labelemail').innerHTML="Tapez votre email!";
        return false ;
    }
    else
    if(address=="")
    {
        document.getElementById('labeladresse').innerHTML="Tapez votre adresse!";
        return false ;
    }
    else
    if(phonenumber=="")
    {
        document.getElementById('labelnumero').innerHTML="Tapez votre numéro de téléphone!";
        return false ;
    }
    else
    // if(birthdate=="")
    // {
    //     alert("Tapez votre date de naissance!");
    //     return false ;
    // }
    // else
    // if(!male && !female  )
    // {
    //     alert("Sexe!");
    //     return false ;
    // }
    
    if(password1=="")
    {
        document.getElementById('labelmdp1').innerHTML="Tapez votre mot de passe!";
        return false ;
    }
    else
    if(password2=="")
    {
        document.getElementById('labelmdp2').innerHTML="Confirmez votre mot de passe!";
        return false ;
    }
    else
    if(nom.includes('0')|| nom.includes('1') || nom.includes('2') || nom.includes('3') || 
    nom.includes('4') || nom.includes('5') || nom.includes('6') || nom.includes('7') ||
        nom.includes('8') || nom.includes('9')  )
    {
        document.getElementById('labelnom').innerHTML="Tapez un nom alphabétique!";
        return false ;
    }
    else
    if(prenom.includes('0')|| prenom.includes('1') || prenom.includes('2') || prenom.includes('3') || 
        prenom.includes('4') || prenom.includes('5') || prenom.includes('6') || prenom.includes('7') ||
        prenom.includes('8') || prenom.includes('9')  )
    {
        document.getElementById('labelprenom').innerHTML="Tapez un prénom alphabétique!";
        return false ;
    }
    else
    if(!email.includes('@') ||  !email.includes('.'))
    {
        document.getElementById('labelemail').innerHTML="Tapez un email valide!";
        return false ;
    }
   
    else
    if(phonenumber.length!=8)
    {
        document.getElementById('labelnumero').innerHTML="Tapez un numéro de téléphone valide!";
        return false ;
    }
    else
    if(password1.length<6)
    {
        document.getElementById('labelmdp1').innerHTML="Votre mot de passe est trés court!";
        return false ;
    }
    else
    if(password1!=password2)
    {
        document.getElementById('labelmdp1').innerHTML="Tapez le même mot de passe!";
        document.getElementById('labelmdp2').innerHTML="Tapez le même mot de passe!";
        return false ;
    }
    else
    return true;

    return true ; 

    
}


