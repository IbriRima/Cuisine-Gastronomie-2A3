

	function showNotification()

	{
     const notification= new Notification("Alert de PointBIO!",
	  {
		  body: "Votre réclamation a été traitée",
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
	