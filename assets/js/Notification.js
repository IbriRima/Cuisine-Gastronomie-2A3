

	function showNotification()

	{
	
	
     const notification= new Notification("Alert de PointBIO!",
	  {
		  body: "Raapel: si votre réclamation a été traitée vous aurez une notification dans votre boite mail. Merci de la vérifier! Bonne journée!",
		  icon:"../assets/img/favicon.png"
		 
	 
	 });

	 notification.onclick=(e)=>
		  {
			  window.location.href="../Views/ReclamationClient.php";
		  }
	 



	}

	console.log(Notification.permission);
		if (Notification.permission==="granted")
		{ 
			showNotification();
		}
		else if (Notification.permission !== "denied")
	
		{
			Notification.requestPermission().then(permission=> {
				
				
				if (permission==="granted")
		{
			showNotification();
		}
	
			});
		}
	

	