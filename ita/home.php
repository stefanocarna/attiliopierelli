<!DOCTYPE html>
<html lang="it" class="no-js" >
	<head>


		<!-- Common head stuff -->
		<?php include 'app/head.php';?>

		<!-- MOD MOD MOD -->
		<!-- <link rel="stylesheet" type="text/css" href="../assets/_home/css/default.css" /> -->
		<link rel="stylesheet" type="text/css" href="../assets/_app/css/home/style.min.css" />
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		

	</head>
	<body>

		<header>

		<!-- MENU MENU MENU -->
		<?php include 'app/initPage.php';?>
		<!-- MENU MENU MENU -->

		</header>

		<main>

			<!-- MOD MOD -->
			<div class="main">

				<ul id="cbp-bislideshow" class="cbp-bislideshow">
					<li>
						<img src="../assets/_app/img/home/dq/1.jpg" alt="image01"/>
						<div class="textBox rightBox topBox">
							<p class="formattedText">
								"Io costruisco delle "forme formanti" <br>
								dalle quali scaturiscono le apparizioni <br>
								create dalla luce. <br>
								Come la nascita di un universo, <br>
								cioè di un sistema ordinato, <br>
								che emerge dal nulla"
							</p>

							<p class="plainText">
								"Io costruisco delle "forme formanti"
								dalle quali scaturiscono le apparizioni
								create dalla luce.
								Come la nascita di un universo,
								cioè di un sistema ordinato,
								che emerge dal nulla"
							</p>
						</div>
					</li>
					
					<li>
						<img src="../assets/_app/img/home/dq/2.jpg" alt="image02"/>
						<div class="textBox leftBox bottomBox">
							<p class="formattedText">
								"L'intuizione è sempre onnicomprensiva. <br>
								L'intuizione è una conoscenza diretta <br>
								priva del ragionameto logico e discorsivo. <br>
								L'intuizione è la conoscenza e l'apprensione immediata <br>
								che ci permette di cogliere istantaneamente la verità, <br>
								senza ricorrere a conoscenze precedenti"
							</p>
							<p class="plainText">
								"L'intuizione è sempre onnicomprensiva.
								L'intuizioe è una conoscenza diretta
								priva del ragionameto logico e discorsivo.
								L'intuizione è la conoscenza e l'apprensione immediata
								che ci permette di cogliere istantaneamente la verità,
								senza ricorrere a conoscenze precedenti"
							</p>
						</div>
					</li>
					<li>
						<img src="../assets/_app/img/home/dq/4.jpg" alt="image04"/>
						<div class="textBox rightBox topBox">
							<p class="formattedText">
								"Ordine ed equilibrio sono i dati<br> 
								che si incontrano nella geometria iperspaziale<br>
								e posso dire che nel creare le sculture ispirate agli iperspazi,<br>
								mi trovo di fronte alla necessità di lavorare <br>
								in modo esasperatamente ordinato per ottenere<br>
								il miglior risultato estetico"
							</p>
							<p class="plainText">
								"Ordine ed equilibrio sono i dati
								che si incontrano nella geometria iperspaziale
								e posso dire che nel creare le sculture ispirate agli iperspazi,
								mi trovo di fronte alla necessità di lavorare
								in modo esasperatamente ordinato per ottenere
								il miglior risultato estetico"
							</p>
						</div>
					</li>
					<li>
						<img src="../assets/_app/img/home/dq/3.jpg" alt="image03"/>
						<div class="textBox leftBox bottomBox">
							<p class="formattedText">
								"Il mio interesse estetico<br>
								era l'espressione poetica<br>
								delle teorie scientifiche più avanzate,<br>
								quali la teoria della relatività,<br>
								la teoria dei quanti, la teoria atomica <br>
								e tutto ciò che riguarda<br>
								la conoscenza del nostro tempo<br>
								visto col prisma della geometria<br>
								e del concetto di spazio"
							</p>
							<p class="plainText">
								"Il mio interesse estetico
								era l'espressione poetica
								delle teorie scientifiche più avanzate,
								quali la teoria della relatività,
								la teoria dei quanti, la teoria atomica
								e tutto ciò che riguarda
								la conoscenza del nostro tempo
								visto col prisma della geometria
								e del concetto di spazio"
							</p>
						</div>
					</li>
					
					<li>
						<img src="../assets/_app/img/home/dq/5.jpg" alt="image05"/>
						<div class="textBox leftBox bottomBox">
							
							<p class="formattedText">
								"Quando l'opera è realizzata, avviene che,<br>
								guardando questi oggetti a tre dimensioni,<br>
								costruiti tramite regole e procedimenti simili<br>
								a quelli del rinascimento ma più vasti e complessi,<br>
								si genera la sensazione delle quattro dimensioni spaziali,<br>
								ed è come vedere apparire dal nulla un'armonia prestabilita<br>
								di cui io, come persona, non sono che il mezzo necessario<br>
								per trarla all'esistenza"
							</p>
							<p class="plainText">
								"Quando l'opera è realizzata, avviene che,
								guardando questi oggetti a tre dimensioni,
								costruiti tramite regole e procedimenti simili
								a quelli del rinascimento ma più vasti e complessi,
								si genera la sensazione delle quattro dimensioni spaziali,
								ed è come vedere apparire dal nulla un'armonia prestabilita
								di cui io, come persona, non sono che il mezzo necessario
								per trarla all'esistenza"
							</p>
						</div>
					</li>
				</ul>
				
				<div id="cbp-bicontrols" class="cbp-bicontrols">
					<span class="cbp-biprev"></span>
					<span class="cbp-bipause"></span>
					<span class="cbp-binext"></span>
				</div>
			</div>

		</main>

		<!-- FOOTER FOOTER -->
		<?php pushCopyright(false) ;?>
		<?php include 'app/endPage.php';?>
		<!-- FOOTER FOOTER -->

		<!-- imagesLoaded jQuery plugin by @desandro : https://github.com/desandro/imagesloaded -->
		<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
		
		<script src="../assets/_app/js/home/cbpBGSlideshow.js"></script>
		<script>
			$(function() {
				cbpBGSlideshow.init();
			});
		</script>
		<!-- MOD MOD -->

	</body>
</html>
