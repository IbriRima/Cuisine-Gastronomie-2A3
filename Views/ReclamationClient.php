

<?PHP

	include "../Controller/ReclamationC.php";

	include "../Controller/TypeReclamationC.php";

	include "../Controller/Client.php";
	session_start();
	$id = $_SESSION['numero'];



	$ReclamationC=new ReclamationC();
	$listeReclamationClient =$ReclamationC->getReclamationById_Client($id) ;
	$TypeReclamationC=new TypeReclamationC();
	$listeType =$TypeReclamationC->TypeReclamation();

?>





<!DOCTYPE html>
 <html class="no-js"> 
	<head>
	<script type = "text/javascript"  src="../assets/js/Notification.js"></script>  
	<script type = "text/javascript"  src="../assets/js/Reclamation.js"></script>  

	<link rel='stylesheet' id='fontawesome-css' href='https://use.fontawesome.com/releases/v5.0.1/css/all.css?ver=4.9.1' type='text/css' media='all' />

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PointBIO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="../assets/img/favicon.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../assets//css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="../assets//css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="../assets//css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="../assets//css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../assets//css/bootstrap.css">

	<link rel="stylesheet" href="../assets//css/style.css">


	<!-- Modernizr JS -->
	<script src="../assets/js/modernizr-2.6.2.min.js"></script>

	

	</head>


	<body>

	<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>


	<div id="fh5co-container">


	<div>
	<h2 ></h2>
	</div>
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
					
					
					
					<a href="#" ></a>
						<a href="#" data-nav-section="reclamation">Vos réclamations</a>
					
					</div>
					<div class="fh5co-logo">
						<a href="Main.php">PointBIO</a>
					</div>
					<div class="fh5co-menu-2">
						
					
			
					
				
					</div>
				</div>
				
			</div>
		</div>



	</div>




	<div id="fh5co-events" data-section="reclamation" style="background-image: url(../assets/img/food5.jpg);" data-stellar-background-ratio="0.5">
	
	<div class="container">
	<h2 class="heading to-animate"></h2>
	<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
	<h4 class="heading to-animate">Réclamation</h4>

		</div>
		</div>
		</div>

		<div class="container">
		<h2 class="heading to-animate"></h2>
		<h4 class="heading to-animate"></h4>
       </div>
	   
<div class="container">
<h2 class="heading to-animate"></h2>
<h4 class="heading to-animate"></h4>

</div>
	</div>


	
		
	<form action="AjouterReclamation.php" method="POST" id="formR">

		<div id="fh5co-contact" data-section="reclamation">
		
			<div class="container">
			
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
					
					
					</div>
				</div>
				<div class="controleN" id="verifNote">
                         </div>
		
					<div class="col-md-6 to-animate-2">
				
						<h3>Ajouter une réclamation</h3>
					
				
						<div class="form-group ">
					
							<label for="Id_client" class="sr-only">Votre identifiant</label>
							<input  name="Id_client" id="Id_client" class="form-control" placeholder="Identifiant" type="text" value="<?php echo $id ?>">
						
						</div>

						
						<div class="form-group ">
							<label for="Type" class="sr-only">Type</label>
							<select  name="Type" id="Type"  class="form-control" >
							<option>Choisissez un type de réclamation</option>
						<?php

                           
							  foreach($listeType  as $TypeReclamation)
							  {
							
                              ?>
					
							 <option>	
							  
							  <?php 
						  
						  echo $TypeReclamation["Libelle"];
						 ?>
						 </option>
						 <?php
							  }
                                ?>

                              </select>
							
						</div>
						<div class="controle" id="verifType">
                        </div>
					
					
							
						<div class="form-group ">
							<label for="Description" class="sr-only">Description du problème</label>
							<textarea name="Description" id="Description" cols="30" rows="5" class="form-control" placeholder="Description du problème"></textarea>
						</div>
						<div class="controle" id="verifDesc">
                       </div>
						

						<div class="form-group ">
							<label for="Proposition" class="sr-only">Votre proposition</label>
							<textarea name="Proposition" id="Proposition" cols="30" rows="5" class="form-control" placeholder="Votre proposition"></textarea>
						</div>
						<div class="controle" id="verifPropo">
                       </div>
				
					
						
						<div class="row">

						<div class="rating">  

      <label for="star1"></label>
      <input  type="radio"  name="Note" value="1">
      <label for="star2"></label>
      <input type="radio"  name="Note" value="2">  
      
      <label for="star3"></label>
      <input  type="radio" name="Note"  value="3">

      <label for="star4"></label>
      <input  type="radio"  name="Note" value="4">

      <label for="star5"></label>
      <input  type="radio"  name="Note" value="5">  

      <label for="star6"></label>
      <input  type="radio" name="Note"  value="6">
 

             </div>
			 </div>
		
			 <div class="row">

<div class="retour">  

<label for="retour"></label>
<a  href="./Main.php" ><b>Page principale</b></a>



</div>

</div>
						<div class="form-group ">
			
							<input class="btn btn-primary" type="submit" value="Ajouter" name = "submit" onclick = "AjoutReclamation();" >
							<input class="btn btn-primary" type="reset" value="Annuler" name = "annuler">
						
						</div>


						</div>
				</div>
			</div>
	

	</form>

	

	<div class="box">
      <div class="top">
        <h2>Bienvenue </h2>
      </div>
      <div class="mid">
    
      
          <p id="chatLog"> </p>
      
      </div>
      <div class="input">
        <input type="text" id="userBox" onkeydown="if(event.keyCode == 13){ talk()}" placeholder=".....">
      </div>
    </div>



    <script type="text/javascript" src="../assets/js/script.js"></script>











	<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(../assets/img/u.jpg)"></div>
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">Vos Réclamations</h2>
				
			
	

				<table class="table">
                    <thead class=" text-primary">
                    <tr>
                    <th class="text-center">Identifiant</th>
				<th class="text-center">Description</th>
				<th class="text-center">Proposition</th>
				<th class="text-center">Note</th>
				<th class="text-center">Type</th>
        <th class="text-center">Etat de traitement</th>
				<th class="text-center">Supprimer</th>
				<th class="text-center">Modifier</th>
			
	
			</tr>
          
                    </thead>
     
                    <tbody>
                    <?PHP
				foreach($listeReclamationClient  as $Reclamation)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $Reclamation['Id_Recl']; ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Description']; ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Proposition']; ?></td>
                    <td class="text-center"><?PHP echo $Reclamation["Note"] ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Type']; ?></td>
   
					<td class="text-center" ><?PHP echo $Reclamation['Etat_traitement']; ?></td>

					<td>
					<form method="POST" action="SupprimerReclClient.php">
                    <input  type="image" src="../assets/img/delete1.png"  type="submit" width="25" heigth="8" />
                    <input   type="hidden" value=<?PHP echo $Reclamation['Id_Recl']; ?> name="Id_Recl" id="Id_Recl">
                    </form>
					</td>

					<td>
                    <form method="POST" action="ModifierReclamation.php">
					<input  type="image" src="../assets/img/update1.png"  type="submit" width="25" heigth="8"/>
					<input   type="hidden" value=<?PHP echo $Reclamation['Id_Recl']; ?> name="Id_Recl" id="Id_Recl">
					<input   type="hidden" value=<?PHP echo $Reclamation['Description']; ?> name="Description" id="Description">
					<input   type="hidden" value=<?PHP echo $Reclamation['Proposition']; ?> name="Proposition" id="Proposition">
					<input   type="hidden" value=<?PHP echo $Reclamation['Note']; ?> name="Note" id="Note">
					<input   type="hidden" value=<?PHP echo $Reclamation['Type']; ?> name="Type" id="Type">
					<input   type="hidden" value=<?PHP echo $id ?> name="Id_client" id="Id_client">
			
                 
                    </form>
					</td>

				</tr>
			<?PHP
				}
			?>

                    <tbody>              
                  </table>
				  </div>
		</div>

		<div id="fh5co-contact" data-section="reclamation">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						
					</div>
				</div>
				</div>
				</div>

				  <div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">PointBIO <br> Conçu par <a href="" target="_blank">L'équipe Innovation</a> 
					</p>
					<p class="text-center to-animate"><a href="#" class="js-gotop">Retour au début</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="fh5co-social">
						<li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
						<li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
						<li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>






	<!-- jQuery -->
	<script src="../assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../assets/js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="../assets/js/moment.js"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="../assets/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="../assets/js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="../assets/js/jquery.flexslider-min.js"></script>
	<script>
		$(function () {
	       $('#date').datetimepicker();
	   });
	</script>
	<!-- Main JS -->
	<script src="../assets/js/main.js"></script>

	</body>
</html>





		
		





	
	
	
	
