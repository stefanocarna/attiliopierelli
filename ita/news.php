<!DOCTYPE html>
<html lang="it" class="no-js" >
	<head>

		<!-- Common head stuff -->
		<?php include 'app/head.php';?>
	</head>
	
	<body class="lozad decored" data-background-image="../assets/_app/img/bkg/u3.jpg">

		<header>

			<!-- MENU MENU MENU -->
			<?php include 'app/initPage.php';?>
			<!-- MENU MENU MENU -->

		</header>

		<main>

			<div class="container page ">

				<div class="card card-news text-white bg-dark">
					<div style="align-self: center;">
						<?php pushImage('header-2.jpg', '') ?>
					</div>
					<div class="card-body">
						<div class="row mb-3">
							<div class="col">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1484.8142407127357!2d12.46821677585215!3d41.90084639477958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f605b21956a17%3A0xb62f1ad019b9a6b9!2sPiazza+di+S.+Salvatore+in+Lauro%2C+15%2C+00186+Roma+RM!5e0!3m2!1sen!2sit!4v1551704864755" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen>
								</iframe>
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<h2>Lunedì 11 Marzo 2019, ore 18.00</h2>
								<h2>Museo San Salvatore in Lauro, piazza San Salvatore in Lauro 15 (Roma)</h2>
								<hr>
								<a class="btn btn-primary btn-lg text-white" href="../assets/_app/media/news/poster-2.jpg" role="button" download><i class="fa fa-download"></i> Scarica l'invito</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="card card-news news-old text-white bg-dark">
					<?php pushImage('header.jpg', '') ?>
					<div class="card-body">
						<div class="row mb-3">
							<div class="col">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2969.644512915562!2d12.467657951108986!3d41.900501671888925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f605adc0a5165%3A0xa52e5021fd383f94!2sVia+dei+Coronari%2C+181%2C+00186+Roma+RM!5e0!3m2!1sen!2sit!4v1539452669970" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
								</iframe>
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<h2>Martedí 23 Ottobre 2018, ore 18.00</h2>
								<h2>Centro Studi Marche, via dei Coronari 181 (Roma)</h2>
								<hr>
								<a class="btn btn-primary btn-lg text-white" href="../assets/_app/media/news/poster.jpg" role="button" download><i class="fa fa-download"></i> Scarica l'invito</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</main>

		<?php include 'app/modal.php';?>

		<!-- FOOTER FOOTER -->
		<?php pushCopyright(true) ;?>
		<?php include 'app/endPage.php';?>
		<!-- FOOTER FOOTER -->

	</body>
</html>