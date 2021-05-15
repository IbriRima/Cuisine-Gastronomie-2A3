

function sendMail()
{

    var aqui = document.getElementById('aqui').value;
    var objet = document.getElementById('objet').value;
    var email = document.getElementById('email').value;



    if(aqui=="")
    {
        alert('Envoyer ce message à qui?');
        return false; 
    }
    else
    if(objet=="")
    {
        alert('Envoyer ce message sans objet?');
    }
    else
    if(email=="")
    {
        alert('Envoyer ce message sans contenu?');
    }

//    var tempParams={
//     aqui: aqui,
//     objet: objet,
//     email: email
//    };

//    emailjs.send('gmail','template_doopytg',tempParams)
//    .then(function(){
//     alert('done');
//    })


     Email.send({
        Host : "smtp.gmail.com",
        Username : "zied.dahmani2@gmail.com",
        Password : "ftetlkol123",
        To : "zied.dahman2@gmail.com",
        From : "zied.dahmani2@gmail.com",
        Subject : objet,
        Body : email
     }).then(
       message => alert(message)
     );
    

    alert('t3ada');


    return true;


    

    

}
