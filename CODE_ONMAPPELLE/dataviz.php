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
		
		<!-- Dataviz avec chart.js-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js"></script>

		<title>On m'appelle ! - La nouvelle plateforme d'echange intergenerationnel</title>
	</head>

	<body>

		<?php 
			include 'header.php';
		?>		
		
		<main>
					
			

			<div class="dataviz_container">
				<h2 class="page_title dataviz_title">Nombre de bénéficiaires de l’allocation personnalisée d’autonomie (APA)</h2>
				<p class="dataviz_description"> Avec une croissance de +123,40% en moins de 20 ans, la solitude est l'un des defis les plus importants des notre temps. Communiquer est la meilleure arme pour vaincre un tel defis. L'union fait la force et c'est pour cela qu'on a besoin de vous!</p>
			    <canvas id="myChart"></canvas>
			    <p class="dataviz_source"> <em>Source: https://drees.solidarites-sante.gouv.fr/</em></p>
			</div>

			<script>
				// On déclare les datas :
				// le label + sa donnée
				// On peut configurer aussi l'apparance
				const data = {
				    labels: [2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019],
				    datasets: [{
				        label: 'Nombre de beneficiares',
				        data: [596917, 771901, 868047, 939204, 1012267, 1075144, 1115427, 1148172, 1175599, 1202425, 1223289, 1241434, 1251261, 1265036, 1285603, 1310317, 1323900,1333541],
				        fill: true,
				        backgroundColor: 'rgba(229, 29, 57, 0.2)',
				        borderColor: 'rgb(229, 29, 57)',
				        tension: 0.5 // La fluidité de la ligne
				    }]
				};

				// On configure notre chart
				const config = {
				    type: 'line',
				    data: data,
				    options: {
				        aspectRatio: 3, // Pour le responsive
				        
				    }
				};

				// On affiche le chart dans l'élément avec l'ID correspondant
				var myChart = new Chart(
				    document.getElementById('myChart'),
				    config
				);

			</script>
			
		</main>

		<?php 
			include 'footer.php';
		?>


		<script>
		
			

		</script>


		<!-- Chart.js + jQuery + Popper.js + Bootstrap JS -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



	</body>

</html>
