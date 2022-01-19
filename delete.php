<?php 

include("bdd/bdd_connexion.php");

if (isset($_GET['did'])){

	$delete_profile_id = $_GET['did'];

	$request = "DELETE FROM `users` WHERE 
				ID_user = '".$delete_profile_id."'";
	$resultat = mysqli_query($connexion, $request) or die (mysqli_error($connexion));
	    header('Location: all_profiles.php');
    } else {
        echo "ERROR";
    }



?>