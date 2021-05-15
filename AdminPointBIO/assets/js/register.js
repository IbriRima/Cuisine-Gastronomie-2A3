

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

    
    var error=true;

    

    if(nom=="")
    {
        document.getElementById('labelnom').innerHTML="Tapez votre nom!";
        error=false ;

    }
    if(prenom=="")
    {
        document.getElementById('labelprenom').innerHTML="Tapez votre prénom!";
        error=false ;
    }

    if(email=="")
    {
        document.getElementById('labelemail').innerHTML="Tapez votre email!";
        error=false ;
    }
    else  if(!email.includes('@') ||  !email.includes('.'))
    {
        document.getElementById('labelemail').innerHTML="Tapez un email valide!";
        error=false ;
    }

    if(address=="")
    {
        document.getElementById('labeladresse').innerHTML="Tapez votre adresse!";
        error=false ;
    }
    if(phonenumber=="")
    {
        document.getElementById('labelnumero').innerHTML="Tapez votre numéro de téléphone!";
        error=false ;
    }
    else  if(phonenumber.length!=8)
    {
        document.getElementById('labelnumero').innerHTML="Tapez un numéro de téléphone valide!";
        error=false ;
    }
    
    
    if(password1=="")
    {
        document.getElementById('labelmdp1').innerHTML="Tapez votre mot de passe!";
        error=false ;
    }
    if(password2=="")
    {
        document.getElementById('labelmdp2').innerHTML="Confirmez votre mot de passe!";
        error=false ;
    }
    if(nom.includes('0')|| nom.includes('1') || nom.includes('2') || nom.includes('3') || 
    nom.includes('4') || nom.includes('5') || nom.includes('6') || nom.includes('7') ||
        nom.includes('8') || nom.includes('9')  )
    {
        document.getElementById('labelnom').innerHTML="Tapez un nom alphabétique!";
        error=false ;
    }
    if(prenom.includes('0')|| prenom.includes('1') || prenom.includes('2') || prenom.includes('3') || 
        prenom.includes('4') || prenom.includes('5') || prenom.includes('6') || prenom.includes('7') ||
        prenom.includes('8') || prenom.includes('9')  )
    {
        document.getElementById('labelprenom').innerHTML="Tapez un prénom alphabétique!";
        error=false ;
    }
   
   
   
    if(password1.length<6)
    {
        document.getElementById('labelmdp1').innerHTML="Votre mot de passe est trés court!";
        error=false ;
    }
    if(password1!=password2)
    {
        document.getElementById('labelmdp1').innerHTML="Tapez le même mot de passe!";
        document.getElementById('labelmdp2').innerHTML="Tapez le même mot de passe!";
        error=false ;
    }
    
    
    return error;

    
}


