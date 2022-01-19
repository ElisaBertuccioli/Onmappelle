<?php 

	$url_pseudo = $_GET['pseudo'];

	// Importazione della BDD
	include("bdd/bdd_connexion.php");


	//// Recuperation des toutes les infos singup sauf interets ///
	$request = "SELECT * 
				FROM `users` 
				WHERE `pseudo` = '".$url_pseudo."'
				";

	
	$resultat = mysqli_query($connexion, $request) or die (mysqli_error($connexion));
	
	
	$nb_resultat = mysqli_num_rows($resultat);
	
	
	if ($nb_resultat > 0) {

		while ($row = mysqli_fetch_array($resultat)){

			$pseudo = $row["pseudo"];
			$nom = $row["lastname"];
			$prenom = $row["firstname"];
			$ville = $row["city"];
			$email = $row["email"];
			$account_type = $row["account_type"];
			$image_url = $row["image_url"];
			//$revenues = $row["revenues"];

		}

			 if ($account_type == 1){

				$account_type_text = "Je veux etre appellé(e)";

			}elseif ($account_type == 2) {

				$account_type_text = "Je veux appeller quelqu'un";

			}else{

				$account_type_text = "";
			}

	}else{
		header('Location: all_profiles.php'); 
	}



	// Recuperation des interets ///

	// On ecrit la requete SQL qui sera envoyée - ici le lien via cle etrangere
	$request2 = "SELECT `interest`.`name_Interest` 
				FROM `interest`, `users`
				WHERE `interest`.`ID_user` = `users`.`ID_user` 
				AND `users`.`pseudo` = '".$url_pseudo."'
				";

	$resultat2 = mysqli_query($connexion, $request2) or die (mysqli_error($connexion));
	
	
	$nb_resultat2 = mysqli_num_rows($resultat2);
	
	
	if ($nb_resultat2 > 0) {

		$user_interests = array();

		while ($row = mysqli_fetch_array($resultat2)){

			$user_interests[] = $row["name_Interest"];

		}
	}else{
		// Pas d'intérêt pour la personne, on affiche un tableau vide
		$user_interests = array();

	}


?>