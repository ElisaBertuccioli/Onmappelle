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
		// Si le paramètre error de GET est présent dans l'URL, alors on affiche le message
		if(isset($_GET['error'])){
			echo "<p class='error' style='color:red'>Connexion refusée ! Veuillez réessayer.</p>";
		}


		?>


		<?php 
			include 'header.php';
		?>		
		
		<main>
			<div class="container">
				<div class="row ">
					<div class="col">
						<div class="page_title">
							<h1>PAGE DE CONNEXION</h1>
						</div>
					</div>
				</div>
				
				
				<form class="form_info" action="traitement_signin.php" method="POST" id="form">

					<div class="row d-flex justify-content-center">
						<div class="col-6 info">
								
								<div class="form-group row">
									<label for="email" class="col-sm-2 col-form-label">Email</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
										<small id="emailvalid" class="form-text text-muted invalid-feedback">Votre email doit être un adresse valide</small>
									</div>
								</div>

								<div class="form-group row">
									<label for="password" class="col-sm-2 col-form-label">Password</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="password" name="password" placeholder="Password">
										<h6 id="passcheck" style="color: red;">**Veuillez inserer le password</h6>
									</div>
								</div>
							</div>
					</div>

					<div class="row d-flex justify-content-center">
						<div class="col-1">
							<input type="submit" Value="Envoyer" class="btn btn-lg button" >
						</div>
					</div>

				</form>
			</div>	
		</main>

		<?php 
			include 'footer.php';
		?>
		


		<!-- jQuery + Popper.js + Bootstrap JS -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="assets/js/js.js"></script>

	</body>

</html>
