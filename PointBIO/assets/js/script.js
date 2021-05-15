function talk(){
  var know = {
    "Bonjour" : "<b>Bonjour, bienvenue à PointBio!<br>Aimez-vous notre site?</b>",
    "Bonsoir" : "<b>Bonsoir, bienvenue à PointBio!<br>Aimez-vous notre site?</b>",
    "Oui" : "<b>Merci beaucoup !<br> Comment puis-je vous aider? <br> * A propos de PointBIO <br> * Page d'accueil ",
    "oui" : "<b>Merci beaucoup !<br> Comment puis-je vous aider? <br> * A propos de PointBIO <br> * Page d'accueil ",
    "Non" : "<b> :( Dommage! Vous pouvez passer vos réclamations ici.</b>", 
    "non" : "<b> :( Dommage! Vous pouvez passer vos réclamations ici.</b>",
    "Page d'accueil":"",
    "A propos de PointBIO":"<b>PointBIO est à la fois un point de vente et un resto 100% biologique fondée par le groupe Innovation en 2021.</b>",

    "Au revoir" : "A la prochaine rencontre"
  };
  var user = document.getElementById('userBox').value;
    document.getElementById('chatLog').innerHTML = user + "<br>";
  if (user in know) {
   
    if(user ==="Page d'accueil")
    {
      window.location.href ='../Views/index.php';
      
    }

    document.getElementById('chatLog').innerHTML = know[user] + "<br>";
  }
  else{
    document.getElementById('chatLog').innerHTML = "<b>Pardon j'ai pas bien compris! S'il vous plait essayer autrement.</b>";
  }
 
 
}
