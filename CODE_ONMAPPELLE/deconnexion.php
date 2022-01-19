<?PHP

	session_start();
	session_destroy(); //On détruit le cookie de l'identifiant.
	include("signin.php"); //On revient au départ.

?>