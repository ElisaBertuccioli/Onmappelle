	<header>
		<div class='container'>
			<div class='row'>
				<nav class='col navbar navbar-expand-lg navbar-dark'>
					<a class='navbar-brand' href='index.php'>
					<img src='assets/img/logo_hd/logo-02.svg' width='150' alt='logo du site'></a>

					<button class='navbar-toggler custom-toggler' type='button' data-toggle='collapse' data-target='#navbarContent'>
							<span class='navbar-toggler-icon'></span>
					</button>
					<div class='collapse navbar-collapse' id='navbarContent'>
						<ul class='navbar-nav'>
							<li class='nav-item active'>
								<a class='nav-link' href='index.php'>Accueil</a>
							</li>
							<li class='nav-item active'>
								<a class='nav-link' href='dataviz.php'>Statistiques</a>
							</li>
							<li class='nav-item active'>

								<?php

									if ((isset($_SESSION['pseudo'])) && ($_SESSION['pseudo']) == "admin"){
										echo "<a class='nav-link' href='all_profiles_admin.php'>Communauté</a>";
									}else {
										echo "<a class='nav-link' href='all_profiles.php'>Communauté</a>";
									}
														
								?>	

							</li>
							
							<li class='nav-item active'>
								<a class='nav-link' href='signup.php'>Inscription</a>
							</li>
							
							<li class='nav-item active'>

								<?php  

									if (isset($_SESSION['pseudo'])){

										echo " <a class='nav-link' href='deconnexion.php'>Deconnexion</a>";
									}else{

										echo " <a class='nav-link' href='signin.php'>Connexion</a>";
									}
								?>
								

							</li>
							
							<li class='nav-item active'>
								<a class='nav-link' href='contacts.php'>Contacts</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>
	