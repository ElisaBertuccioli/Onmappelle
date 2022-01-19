<?php

// Recuperer valeur nom
if(isset($_POST['lastname'])){
	$lastname = htmlentities(urldecode($_POST['lastname']));
}else{
	$lastname = "";
}

// Recuperer valeur prenom
if(isset($_POST['firstname'])){
	$firstname = htmlentities(urldecode($_POST['firstname']));
}else{
	$firstname = "";
}

// Recuperer valeur ville
if(isset($_POST['city'])){
	$city = htmlentities(urldecode($_POST['city']));
}else{
	$city = "";
}

// Recuperer valeur pseudo
if(isset($_POST['pseudo'])){
	$pseudo = htmlentities(urldecode($_POST['pseudo']));
}else{
	$pseudo = "";
}


// Recuperer valeur email
if(isset($_POST['email'])){
	$email = htmlentities(urldecode($_POST['email']));
}else{
	$email = "";
}


// Recuperer valeur password 
if(isset($_POST['password'])){
	$password = $_POST['password'];
	$password = sha1($password);
}else{
	$password = "";
}


// Recuperer la valeur Interests
if(isset($_POST['interest'])){
	$interest = $_POST['interest'];
}else{
	$interest = "no interest";
}


// Recuperer valeur account_type 
if(isset($_POST['account_type'])){
	$account_type = htmlentities(urldecode($_POST['account_type']));
}else{
	$account_type = "";
}

// Recuperer image s'il y a 
if($_FILES['photo']['name'] != ""){
	$photo_profil = "yes";

	// TRAITEMENT IMAGE
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Verifier si c'est une vraie image
	if($_FILES['photo']['name'] != "") {
	  $check = getimagesize($_FILES["photo"]["tmp_name"]);
	  if($check !== false) {
	  echo "File is an image - " . $check["mime"] . ".";
	  $uploadOk = 1;
	    } else {
	       echo "File is not an image.";
	       $uploadOk = 0;
	    }
	 }

	// Verifier si l'image existe deja
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}

	// Verifier la taille de l'image
	if ($_FILES["photo"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}

	// Permission de certains formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}

}else{
	$uploadOk = 1;
	$photo_profil = "no";
}

//////////////////////////////////////////////////////////////////////////////////////////

if(!empty($pseudo) && !empty($lastname) && !empty($firstname) && !empty($city) && !empty($email) && !empty($password) && !empty($account_type) && !empty($interest) && $uploadOk == 1){

	if($photo_profil == "yes"){
		move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
	}else{
		$target_file = "uploads/noimage.png";
	}
	
	// Importer la BDD
	include("bdd/bdd_connexion.php");

	
	$request1 = "SELECT * FROM `users` 
				WHERE `email` = '".$email."' OR `pseudo` = '".$pseudo."'
				";

	$resultat1 = mysqli_query($connexion, $request1) or die (mysqli_error($connexion));
	$nb_resultat1 = mysqli_num_rows($resultat1);
	
	if ($nb_resultat1 > 0) {
		
		header('Location: signup.php?error=yes');

		}else{
			
			$request2 = "INSERT INTO `users`(`pseudo`,`lastname`, `firstname`, `city`, `email`,`password`, `account_type`,`image_url` ) 
						VALUES ('".$pseudo."', '".$lastname."', '".$firstname."', '".$city."', '".$email."', '".$password."', '".$account_type."', '".$target_file."')";

			$resultat2 = mysqli_query($connexion, $request2) or die (mysqli_error($connexion));

			$last_id_user_inserted = mysqli_insert_id($connexion);
			
			foreach ($interest as $int){
				$request3 = "INSERT INTO `interest`(`name_Interest`, `ID_user`) 
								VALUES ('".$int."', (SELECT ID_user FROM users WHERE ID_user = ".$last_id_user_inserted."))";
				$resultat3 = mysqli_query($connexion, $request3) or die (mysqli_error($connexion));
			}

			// On initialise la session
			session_start();
			$_SESSION['pseudo'] = $pseudo;

			
			header('Location: profile.php?pseudo='.$pseudo);

		}
 	}

?>