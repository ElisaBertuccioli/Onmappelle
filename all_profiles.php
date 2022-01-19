

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

				
					<?php 

							
						include('bdd/bdd_connexion.php');

						echo "<div class='all_profiles_title'><h1>Notre communauté</h1></div>";

						$request = "SELECT * FROM `users`";
						$resultat = mysqli_query($connexion, $request) or die(mysqli_error($connexion));
						$nb_resultat = mysqli_num_rows($resultat);


						if ($nb_resultat > 0){
							while ($row=mysqli_fetch_array($resultat)){

								if ($row['account_type'] == 1) {
								 	$account_type_text = "etre appellé(e)";
								 	echo "<div class='profile_container'>";
									echo "<div class='profile profile1'>";
									echo "<h2>".$row['firstname']." de ".$row['city']." </h2>";
									echo "a rejoint notre communauté pour <strong> ".$account_type_text."</strong><br>";
									echo "et peut etre contacté(e) au : <em><strong>".$row['email']."</strong></em>";
									echo "<p> Pour visiter son profile, cliquez : <a href='profile.php?pseudo=".$row['pseudo']."'>ICI</a></p>";
									echo "</div>";
									echo "</div>";
								 }

								if ($row['account_type'] == 2) {
								 	$account_type_text = "appeller quelqu'un";
								 	echo "<div class='profile_container'>";
									echo "<div class='profile profile2'>";
									echo "<h2>".$row['firstname']." de ".$row['city']." </h2>";
									echo "a rejoint notre communauté pour <strong> ".$account_type_text."</strong><br>";
									echo "et peut etre contacté(e) au : <em><strong>".$row['email']."</strong></em>";
									echo "<p> Pour visiter son profile, cliquez : <a href='profile.php?pseudo=".$row['pseudo']."'>ICI</a></p>";
									echo "</div>";
									echo "</div>";
								 }
							}
						}


					?>
			</div>

		</main>

		<?php 
			include 'footer.php';
		?>


		<!-- jQuery + Popper.js + Bootstrap JS -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="signup.js"></script>
		<script src="js.js"></script>

	</body>

</html>
