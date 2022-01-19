<?php

	$host = "localhost:8889";
	$database = "onmappelle";
	$user = "root";
	$passwd = "root";

	$connexion = mysqli_connect($host, $user, $passwd, $database);

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySql: ". mysqli_connect_error();
	}


?>