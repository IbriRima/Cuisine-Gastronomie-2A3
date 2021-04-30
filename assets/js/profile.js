

function VerifNom()
{

    var nom = document.getElementById('nom').value;



    if(nom=="")
    {
        alert("Tapez votre nom!");
        return ; 
    }

    if(nom.includes('0')|| nom.includes('1') || nom.includes('2') || nom.includes('3') || 
    nom.includes('4') || nom.includes('5') || nom.includes('6') || nom.includes('7') ||
        nom.includes('8') || nom.includes('9')  )
    {
        alert("Tapez un nom alphabétique!");
        return ;
    }
    
    

}

function VerifPrenom()
{

    var prenom = document.getElementById('prenom').value;

    if(prenom=="")
    {
        alert("Tapez votre prénom!");
        return ; 
    }

    if(prenom.includes('0')|| prenom.includes('1') || prenom.includes('2') || prenom.includes('3') || 
    prenom.includes('4') || prenom.includes('5') || prenom.includes('6') || prenom.includes('7') ||
    prenom.includes('8') || prenom.includes('9')  )
    {
        alert("Tapez un prénom alphabétique!");
        return ;
    }

}

function VerifEmail()
{
    var email = document.getElementById('email').value;


    if(email=="")
    {
        alert("Tapez votre email!");
        return ; 
    }

    if(!email.includes('@') ||  !email.includes('.'))
    {
        alert("Tapez un email valid!");
        return ;
    }
}

function VerifNum()
{
    var numero = document.getElementById('numero').value;

    if(numero=="")
    {
        alert("Tapez votre numéro de téléphone!");
        return ; 
    }

    if(numero.length!=8)
    {
        alert("Tapez un numéro de téléphone valide!");
        return ;
    }

}

function VerifAdresse()
{
    var adresse = document.getElementById('adresse').value;

    if(adresse=="")
    {
        alert("Tapez votre adresse!");
        return ; 
    }
}



