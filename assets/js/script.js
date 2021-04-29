function talk(){
  var know = {
    "Bonjour" : "<b>Bonjour, bienvenue à PointBio!<br>Aimez-vous notre site?</b>",
    "Bonsoir" : "<b>Bonsoir, bienvenue à PointBio!<br>Aimez-vous notre site?</b>",
    "Oui" : "<b>Merci beaucoup !<br> Que voulez-vous visiter? <br> * Consulter votres compte <br> * Page d'accueil ",
    "Non" : "<b> :( Dommage! Vous pouvez passer vos réclamations ici.</b>", 
    "Mon compte":"<b>Votre compte</b>",
    "Page d'accueil":"",
    "A propos de PointBio":"<b>PointBIO</b>",

    "Au revoir" : "A la prochaine rencontre"
  };
  var user = document.getElementById('userBox').value;
    document.getElementById('chatLog').innerHTML = user + "<br>";
  if (user in know) {
    if(user ==="Menu")
    {
  
      window.location.href ="../Views/Main.php";
    }
    if(user ==="Mon compte")
    {
      window.location.href ="http://localhost/Reclamations/Views/ClientProfile.php";
      
    }
    if(user ==="Page d'accueil")
    {
      window.location.href ='http://localhost/Reclamations/Views/Main.php';
      
    }

    document.getElementById('chatLog').innerHTML = know[user] + "<br>";
  }
  else{
    document.getElementById('chatLog').innerHTML = "<b>Pardon j'ai pas bien compris! S'il vous plait essayer autrement.</b>";
  }
 
 
}
