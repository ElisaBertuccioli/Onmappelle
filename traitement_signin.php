<?php

if(isset($_POST['email'])){
	$email = htmlentities(urldecode($_POST['email']));
}else{
	$email = "";
	}

// pas besoin de htmlentities et urldecode parce que le sha1 a deja caché et je ne dois pas casser le mdp avant de le hacher

if(isset($_POST['password'])){
	$password = $_POST['password'];
	$password = sha1($password);
}else{
	$password = "";
	}



if(!empty($email) && !empty($password)){
	
	
	include("bdd/bdd_connexion.php");

	
	$request = "SELECT * 
				FROM `users` 
				WHERE `email` = '".$email."' AND `password` = '".$password."'
				";

	
	$resultat = mysqli_query($connexion, $request) or die (mysqli_error($connexion));
	
	$nb_resultat = mysqli_num_rows($resultat);
	
	
	if ($nb_resultat > 0) {


		while ($row = mysqli_fetch_array($resultat)){

			$pseudo = $row["pseudo"];

		}

		if($pseudo == "admin"){

			//initialiser la session pour l'admin
			session_start();
			$_SESSION['pseudo'] = $pseudo;

			header('Location: all_profiles_admin.php');

		}else{

			//initialiser la session pour le non admin
			session_start();
			$_SESSION['pseudo'] = $pseudo;
			
			header('Location: profile.php?pseudo='.$pseudo);
			
		}

	}else{
		header('Location: signin.php?error=yes');
	}
	
}


?>