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
		
		<?php 

			include 'traitement_profile.php';
		?>

		<main>
			<div class="container">

				<?php   
						if ($account_type == 1 ){

					?>

							<div class="row">
								<div class="col">
									<div class="page_title user_name">
										<h1>PROFILE DE <?php echo $prenom; ?></h1>
									</div>
								</div>
							</div>

				<?php 

						}

				?>

				<?php   
						if ($account_type == 2 ){

					?>

							<div class="row">
								<div class="col">
									<div class="page_title user_name">
										<h1 style="color: #3AB54A;">PROFILE DE  <?php echo $prenom; ?></h1>
									</div>
								</div>
							</div>

				<?php 

						}

				?>
				
				
				<?php   
						if ($account_type == 1 ){

				?>
							<div class="row d-flex justify-content-center account_content">
								<div class="col-12 col-lg-3">
									<div class="user_photo_box">


										<?php echo "<img src='".$image_url."' alt='phot_user_1' class='user_photo user_photo_1' />" ;?>
													
									</div>
								</div>
								<div class="col-12 col-lg-4 user_info_box">
									<h4>INFORMATIONS SUR <?php echo $prenom; ?></h4>
									<table>
										<tr>
											<td><strong>Prènom:</strong></td>
											<td><?php echo $prenom; ?></td>
										</tr>
										<tr>
											<td><strong>J'habite à:</strong></td>
											<td><?php echo $ville; ?></td>
										</tr>
										<tr>
											<td><strong>Je veux:</strong></td>
											<td><?php echo $account_type_text; ?></td>
										</tr>
										<tr>
											<td><strong>Mon contact:</strong></td>
											<td><?php echo $email; ?></td>
										</tr>
									</table>
								</div>

								<div class="col-12 col-lg-4 user_info_box">
									<h4>INTERETS DE <?php echo $prenom; ?></h4>
									<ul>
										<?php foreach ($user_interests as $interest) { ?>						
											<li><?php echo $interest; ?></li>
										<?php } ?>
									</ul>
								</div>
							</div>

				<?php 
						}
				?>

				
				<?php   
						if ($account_type == 2 ){

					?>

							<div class="row d-flex justify-content-center account_content">
								<div class="col-12 col-lg-2">
									<div class="user_photo_box" style="margin-left: 0;">

										<?php echo "<img src='".$image_url."' alt='phot_user_2' class='user_photo user_photo_2' />" ;?>
												
									</div>
								</div>
								<div class="col-12 col-lg-4 user_info_box">
									<h4>INFORMATIONS SUR <?php echo $prenom; ?></h4>
									<table>
										<tr>
											<td><strong>Prènom:</strong></td>
											<td><?php echo $prenom; ?></td>
										</tr>
										<tr>
											<td><strong>J'habite à:</strong></td>
											<td><?php echo $ville; ?></td>
										</tr>
										<tr>
											<td><strong>Je veux:</strong></td>
											<td><?php echo $account_type_text; ?></td>
										</tr>
										<tr>
											<td><strong>Mon contact:</strong></td>
											<td><?php echo $email;?></td>
										</tr>
									</table>
								</div>
								
								<div class="col-12 col-lg-5 user_info_box user2_interest_box">
									<h4>RATING DE <?php echo $prenom; ?></h4>
									<div class="rating_box">
										<div class="all_criterias">
											<div class="rating">
												<img src="assets/img/icons/star_full.png" class="star">
												<img src="assets/img/icons/star_full.png" class="star">
												<img src="assets/img/icons/star_full.png" class="star">
												<img src="assets/img/icons/star_empty.png"class="star">
												<img src="assets/img/icons/star_empty.png"class="star">
												<p class="criteria">Ponctualitè</p>
											</div>
											<div class="rating">
												<img src="assets/img/icons/star_full.png" class="star">
												<img src="assets/img/icons/star_full.png" class="star">
												<img src="assets/img/icons/star_full.png" class="star">
												<img src="assets/img/icons/star_full.png"class="star">
												<img src="assets/img/icons/star_empty.png"class="star">
												<p class="criteria">Curiositè</p>
											</div>
											<div class="rating">
												<img src="assets/img/icons/star_full.png" class="star">
												<img src="assets/img/icons/star_full.png" class="star">
												<img src="assets/img/icons/star_empty.png" class="star">
												<img src="assets/img/icons/star_empty.png"class="star">
												<img src="assets/img/icons/star_empty.png"class="star">
												<p class="criteria">Frequence</p>
											</div>
											<div class="rating">
												<img src="assets/img/icons/star_full.png" class="star">
												<img src="assets/img/icons/star_full.png" class="star">
												<img src="assets/img/icons/star_full.png" class="star">
												<img src="assets/img/icons/star_full.png"class="star">
												<img src="assets/img/icons/star_full.png"class="star">
												<p class="criteria">Bienveillance</p>
											</div>
										</div>
										<div class="scoring">
											<h5>9,5/10</h5>
											<p>Score Moyen</p>
										</div>
									</div>
								</div>


								<div class="col-12 col-lg-2 user_info_box">
									<h4>INTERETS DE <?php echo $prenom; ?></h4>
									<ul>
										<?php foreach ($user_interests as $interest) { ?>						
											<li><?php echo $interest; ?></li>
										<?php } ?>
									</ul>
								</div>	


							</div>

				<?php 
						}
				?>
				

				<?php   
						if ($account_type == 1 ){

					?>

							<div class="row d-flex justify-content-center reminder_links">
								<div class="col-12 col-lg-3 reminder_item">
									<h6>TES PROCHAINS RDV</h6>
								</div>
								<div class="col-12 col-lg-3 rdv_date reminder_item">
									<h6>16 NOVEMBRE A 11H00</h6>
								</div>
								<div class="col-12 col-lg-3 reminder_item">
									<h6>TU VEUX PARLER AVEC EUX?</h6>
								</div>
								<div class="col-12 col-lg-3 reminder_item">
									<img src="assets/img/img_user/user_2_a.png">
									<img src="assets/img/img_user/user_2_b.png">
									<img src="assets/img/img_user/user_2_c.jpeg">
									<img src="assets/img/img_user/user_2.jpeg">
								</div>															
							</div>

				<?php 
					}
				?>

				<?php   
						if ($account_type == 2 ){

					?>

							<div class="row d-flex justify-content-center reminder_links">
								<div class="col-12 col-lg-3 reminder_item">
									<h6>TES DERNIERS RDV</h6>
								</div>
									<div class="col-12 col-lg-3 reminder_item">
									<img src="assets/img/img_user/user_1_a.png">
									<img src="assets/img/img_user/user_1_b.png">
									<img src="assets/img/img_user/user_1_c.png">						
									<img src="assets/img/img_user/user_1.jpeg">
								</div>
								<div class="col-12 col-lg-3 rdv_date reminder_item">
									<!-- VOIR SI ON GARDE LA REDIRECTION VERS PAGE COMMENTAIRES -->
									<a href=""><h6>CE QU'ON DIT SUR TOI</h6></a>
								</div>
								<div class="col-12 col-lg-3 reminder_item reminder_item_comment">
									<p>"Ponctuelle et attentionnée...."</p>
								</div>															
							</div>

				<?php 
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
		

	</body>

</html>
