
<!doctype html>

<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<!-- CSS3 -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		

		<title>On m'appelle ! - La nouvelle plateforme d'echange intergénérationnel</title>
	</head>

	<body>
			
		<?php 
			include 'header.php';
		?>		
		
		
		<div class="container">
			<div class="row mb-3 mt-3">
				<div class="col">
			     	<div id="carouselControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
		  					<div class="carousel-item active">
		     					<img src="assets/img/img_carousel/apprenant.jpg" class="d-block w-100" alt="image1">
		  					</div>
		  					<div class="carousel-item">
		    					 <img src="assets/img/img_carousel/apprenant2.jpg" class="d-block w-100" alt="image2">
		  					</div>
		  					<div class="carousel-item">
		    					 <img src="assets/img/img_carousel/apprenant3.jpg" class="d-block w-100" alt="image2">
		  					</div>		  					
						</div>
						<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
			     			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			      			<span class="sr-only">Précédent</span>
		   				</a>
					   	<a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Suivant</span>
					   	</a>
					</div>
				</div>
			</div>
			<div class="row mb-3 mt-3 welcome_phrase">
				<div class="col">
					<h1>BIENVENUE sur <img src="assets/img/logo_hd/logo-01.svg" style="max-height: 7em; padding-left: 1em;"></h1><br>
					<h3>La première plateforme de communication entre générations, pensée pour les échanges de demain</h3>
				</div>
				
			</div>
		   <div class="row card_one">
		     <div class="col-12 col-lg-4">
		     	<div class="card mb-4 mb-lg-0 shadow">
		     		<a href="signup.php" style="text-decoration: none; color: black;">
		     		<img src="assets/img/img_index/inscription2.png" alt="inscription" class="card-img-top">
		     		<div class="card-body">
		     			<h5 class="card-title">ON S'INSCRIT !</h5>
		     			<p class="card-text">L'aventure commence par une inscription rapide et facile, c'est ici.</p>
		     		</div>
		     		</a>
		     	</div>
		     </div>
		     <div class="col-12 col-lg-4">
		     	<div class="card mb-4 mb-lg-0 shadow">
		     		<img src="assets/img/img_index/exchange2.png" alt="echange" class="card-img-top">
		     		<div class="card-body">
		     			<h5 class="card-text">ON ECHANGE !</h5>
		     			<p class="card-text">Echanger ses coordonnées en un clin d'oeil. C'est presque fait.</p>
		     		</div>
		     	</div>
		     </div>
		     <div class="col-12 col-lg-4">
		     	<div class="card mb-4 mb-lg-0 shadow">
		     		<img src="assets/img/img_index/talking.png" alt="parler" class="card-img-top">
		     		<div class="card-body">
		     			<h5 class="card-text">ON PARLE !</h5>
		     			<p class="card-text">Plus on parle, plus on se sent bien. Maintenant c'est à toi.</p>
		     		</div>
		     	</div>
		     </div>
		   </div>
		   <div class="row card_two">
		     <div class="col-12 col-lg-4">
		     	<div class="card mb-4 mb-lg-0 shadow">
		     		<img src="assets/img/img_index/protect.png" alt="protection" class="card-img-top">
		     		<div class="card-body">
		     			<h5 class="card-title">ON PROTEGE !</h5>
		     			<p class="card-text">La bienveillance est la base ici. Commente pour veiller et gagner.</p>
		     		</div>
		     	</div>
		     </div>
		     <div class="col-12 col-lg-4">
		     	<div class="card mb-4 mb-lg-0 shadow">
		     		<a href="dataviz.php" style="text-decoration: none; color: black;">
		     		<img src="assets/img/img_index/onyva.png" alt="letsgo" class="card-img-top">
		     		<div class="card-body">
		     			<h5 class="card-text">ON S'INFORME !</h5>
		     			<p class="card-text">Contribue à mieux faire connaitre l'isolement social.</p>
		     		</div>
		     		</a>
		     	</div>
		     </div>
		     <div class="col-12 col-lg-4">
		     	<div class="card mb-4 mb-lg-0 shadow">
		     		<a href="contacts.php" style="text-decoration: none; color: black;">
		     		<img src="assets/img/img_index/tellus.png" alt="raconte_nous" class="card-img-top">
		     		<div class="card-body">
		     			<h5 class="card-text">ON RACONTE !</h5>
		     			<p class="card-text">Raconte-nous tes plus belles rencontres et échanges.</p>
		     		</div>
		     		</a>
		     	</div>
		     </div>
		   </div>
		   	<div class="row d-flex justify-content-center signup_button">
				<div class="col-lg-1 col-3">
					<a href="signup.php"><button type="button" class="btn btn-lg">Je m'inscris</button></a>
				</div>
			</div>
		</div>
		
	<?php 
		include 'footer.php';
	?>


		<!-- jQuery + Popper.js + Bootstrap JS -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>

</html>

