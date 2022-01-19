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
			echo "<p class='error' style='color:red'>Email ou pseudo déjà utilisè ! Veuillez réessayer.</p>";
		}


		?>
		
		<?php 
			include 'header.php';
		?>		

		<main>
			<div class="container">

				<div class="row" style="max-height: 3em;">
					<div class="col-12">
						<div class="page_title">
							<h1>PAGE D'INSCRIPTION</h1>
						</div>
					</div>
				</div>
						
				<form class="form_info" enctype="multipart/form-data" action="traitement_signup.php" method="POST" id="form">

					<div class="row d-flex justify-content-center">

						<div class="col-lg-6 col-12 info">
							
								<h4>VOS INFORMATIONS PERSONNELLES</h4></br>

								<div class="form-group row">
									<label for="lastname" class="col-sm-2 col-form-label">Nom</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Bertuccioli">
									</div>
								</div>

								<div class="form-group row">
									<label for="firstname" class="col-sm-2 col-form-label">Prénom</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Elisa">
									</div>
								</div>

								<div class="form-group row">
									<label for="city" class="col-sm-2 col-form-label">Ville</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="city" name="city" placeholder="Paris">
									</div>
								</div>

								<div class="form-group row">
									<label for="pseudo" class="col-sm-2 col-form-label">Pseudo</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Elisa83">
									</div>
								</div>

								<div class="form-group row">
									<label for="email" class="col-sm-2 col-form-label">Email</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
										<small id="emailvalid" class="form-text text-muted invalid-feedback">Votre mail doit etre un adresse mail valide</small>
									</div>
								</div>

								<div class="form-group row">
									<label for="password" class="col-sm-2 col-form-label">Password</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="password" name="password" placeholder="Password">
										<h6 id="passcheck" style="color: red;">**Veuillez reinsegner le mot de passe</h6>
									</div>
								</div>

								<div class="form-group row">
									<label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Je veux</label>
									<div class="col-sm-10">
										<select class="form-control" id="exampleFormControlSelect1" name="account_type">
											<option value="1">etre appelé.e</option>
											<option value="2">appeller quelqu'un</option>
										</select>
									</div>
								</div>
							</div>

						<div class="col-lg-4 col-12 interests">

							<div class="form_interests">
								
								<div>
									<h4>VOS CENTRES D'INTÉRÊT</h4>
								</div>
								<div class="checkbox-list">
									<div class="form-group row">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="interest[]" value="nature" id="nature">
											<label class="form-check-label" for="nature">Nature</label>
										</div>
									</div>
									<div class="form-group row">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="interest[]" value="voyages" id="voyages">
											<label class="form-check-label" for="voyages">Voyages</label>
										</div>
									</div>	
									<div class="form-group row">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="interest[]" value="technologies" id="technologies">
											<label class="form-check-label" for="technologies">Technologies</label>
										</div>
									</div>
									<div class="form-group row">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="interest[]" value="sociologie" id="sociologie">
											<label class="form-check-label" for="sociologie">Sociologie</label>
										</div>
									</div>
									<div class="form-group row">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="interest[]" value="spiritualite" id="spiritualite">
											<label class="form-check-label" for="spiritualite">Spiritualité</label>
										</div>
									</div>                        																	
									<div class="form-group row">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="interest[]" value="animaux" id="animaux">
											<label class="form-check-label" for="animaux">Animaux</label>
										</div>
									</div>
								
									<div class="form-group row"> <!-- Pas sure de comment l'envoyer à la BDD -->
										<div class="form-check autre">
											<input type="checkbox" id="other" name="interest[]" value="other">
	      									<label for="other">Autre</label>
	      									<input type="text" id="otherValue" name="other">
										</div>
									</div> 
								</div>

								<div>
									<h4>UNE PHOTO DE VOUS</h4>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
										<input type="file" class="form-control" id="photo" name="photo">
									</div>
								</div>

							</div>
						</div>

						<div class="col-lg-2 col-3 align-self-center">
							<input type="submit" value="Envoyer" class="btn btn-lg button signup_button2" name="submit" >
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
		<script src="assets/js/signup.js"></script>
		<script src="assets/js/js.js"></script>

	</body>

</html>
