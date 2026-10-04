<!DOCTYPE html>
<html lang="it" class="no-js" >
	<head>

		<!-- Common head stuff -->
		<?php include 'app/head.php';?>
	</head>
	
	<body class="lozad decored" data-background-image="../assets/_app/img/bkg/e2.jpg">

		<header>

			<!-- MENU MENU MENU -->
			<?php include 'app/initPage.php';?>
			<!-- MENU MENU MENU -->

		</header>

		<main>

			<div class="container page ">
				
				<div class="row mb-5 justify-content-end">
					<div class="col col-12 col-lg-auto">
						<div class="card text-section">
							 <div class="card-body">
								<h1 class="title">luce e rifrazione (1967 - 1971)</h1>
							</div>
						</div>
					</div>
				</div>

				<div class="row mb-4 text-section">
					<div class="col col-12">
						<p>
							Dopo aver indagato e rappresentato le tre dimensioni canoniche, e col sopraggiungere del secolo scorso anche la quarta data dal Tempo, Pierelli creò, attraverso la sua arte, una quinta nuova dimensione: la Luce. Secondo lo scultore, infatti, la Luce rappresentava «<i>il vero simbolo del movimento eterno, […] la presenza totale dell’infinito</i>»<?php pushTip('M. Fagiolo dell’Arco, Rapporto 60: le arti oggi in Italia, Roma, Bulzoni Editore, 1966, p. 167.') ?>, nonché l’elemento mancante di quella combinazione spazio - luce - atmosfera che fa della realtà un insieme di fenomeni in continuo divenire e percepibili solo nella loro incessante variazione.
						</p>
					</div>
				</div>

				<div class="row mb-4 text-section">
					<div class="col col-12 d-flex justify-content-center slider">

						<?php pushImage('P34.jpg', 'Lente, 1969, plexiglas e acqua, cm 40x40x15 (controllare misure sul retro della foto)') ?>

						<?php pushImage('P50.jpg', 'Lente, 1971, plexiglas e acqua, cm 40x40x15') ?>

						<?php pushImage('P51.jpg', 'Una goccia d’acqua, 1972, plexiglas e acqua, cm 100x40x60') ?>

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