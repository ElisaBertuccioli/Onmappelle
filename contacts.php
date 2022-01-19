<?php
	// On initie la session
	session_start();
	
	// Si la variable de Session 'pseudo' n'existe pas, on redirige vers la page de connexion.
	if(!isset($_SESSION['pseudo'])){
		header("location:signup.php");
	}
?>


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
		

		<title>On m'appelle ! - La nouvelle plateforme d'echange intergenerationnel</title>
	</head>

	<body>
		
		<?php 
			include 'header.php';
		?>		
		
		<main>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="page_title">
							<br><h2>RACONTE NOUS TON EXPERIENCE - NOUS AVONS HATE DE T'ECOUTER !</h2>
						</div>
					</div>
				</div>
				
				<div class="row d-flex justify-content-center">
					<div class="col-lg-10 info">
						<form class="form_info" action="" method="POST">

							<div class="form-group row">
								<div class="col-lg-4">	
									<label for="pseudo_writer" class="col-form-label">Votre pseudo</label>
								</div>
								<div class="col-lg-6">
									<input type="text" class="form-control" id="pseudo_writer">
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-4">	
									<label for="pseudo_receiver" class="col-form-label">Le pseudo de votre interlocuteur</label>
								</div>
								<div class="col-lg-6">
									<input type="text" class="form-control" id="pseudo_receiver">
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-4">
									<label for="message" class="col-form-label">Message</label>
								</div>
								<div class="col-lg-6">
									<textarea id="message" name="message"rows="5" cols="50" value="message" placeholder="Ici ton message"></textarea>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="row d-flex justify-content-center">
					<div class="col-1">
						<button type="button" class="btn btn-lg">Envoyer</button>
					</div>
				</div>
			</div>	
		</main>

		<?php 
			include 'footer.php';
		?>

		<!-- jQuery + Popper.js + Bootstrap JS -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		

	</body>

</html>
