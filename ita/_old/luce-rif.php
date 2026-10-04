<!DOCTYPE html>
<html lang="it" class="no-js" >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />

		<title>Attilio Pierelli</title>
		<link rel="icon" type="image/png" href="../assets/_common/img/favicon.png">

		<!-- general layout css -->		
		<link href="../assets/_common/css/layout.css" rel="stylesheet" />

		<link href="../assets/_common/css/text.css" rel="stylesheet" type="text/css" />
		<link href="../assets/_common/css/caption.css" rel="stylesheet" />

		<!-- grid images -->
   		<link rel="stylesheet" type="text/css" href="../assets/_app/images/css/grid-full.css" />

		<!-- tooltip -->
		<link rel="stylesheet" type="text/css" href="../assets/_app/tooltip/css/tooltip.css" />

		<!-- menu css -->
		<link rel="stylesheet" href="../assets/_common/css/menu.css" type="text/css" media="screen">

		<!-- motion specific css -->
		<!-- <link rel="stylesheet" href="../assets/_light/css/format.css" type="text/css" media="screen"> -->

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	</head>
	<body>

		

		<!-- MENU MENU MENU -->
		<?php include 'app/header.php';?>
		<!-- MENU MENU MENU -->

		<div id="top-page" style="position: absolute; margin-top: -10%;" ></div>

		<a href="#top-page" class="go-top">
			<i class="fa fa-chevron-circle-up"></i>
		</a>
		
		<div class="text-container">

			<p class="text-header">
				luce e rifrazione (1967 - 1971)
			</p>

			<p class="text-content">
				Dopo aver indagato e rappresentato le tre dimensioni canoniche, e col sopraggiungere del secolo scorso anche la quarta data dal Tempo, Pierelli creò, attraverso la sua arte, una quinta nuova dimensione: la Luce. Secondo lo scultore, infatti, la Luce rappresentava «<i>il vero simbolo del movimento eterno, […] la presenza totale dell’infinito</i>»<span class="text-tip"></span><a class="tip" 
				title="M. Fagiolo dell’Arco, Rapporto 60: le arti oggi in Italia, Roma, Bulzoni Editore, 1966, p. 167."
				style="color: white;"><sup>1</sup></a>. , nonché l’elemento mancante di quella combinazione spazio - luce - atmosfera che fa della realtà un insieme di fenomeni in continuo divenire e percepibili solo nella loro incessante variazione. 
			</p>

			<div class="resp-container">

				<div class="responsive">
					<img class="resImg" src="../assets/_light/img/thumbs/P34.jpg" data-src="../assets/_light/img/P34.jpg"
					alt="Lente, 1969, plexiglas e acqua, cm 40x40x15 (controllare misure sul retro della foto)"
					width="250" height="250">
				</div>

				<div class="responsive">
					<img class="resImg" src="../assets/_light/img/thumbs/P50.jpg" data-src="../assets/_light/img/P50.jpg"
					alt="Lente, 1971, plexiglas e acqua, cm 40x40x15"
					width="250" height="250">
				</div>

				<div class="responsive">
					<img class="resImg" src="../assets/_light/img/thumbs/P51.jpg" data-src="../assets/_light/img/P51.jpg"
					alt="Una goccia d’acqua, 1972, plexiglas e acqua, cm 100x40x60"
					width="250" height="250">
				</div>
			</div>

		<!-- The Modal -->
		<div id="myModal" class="modal">
		  <span id="closeBtn">×</span>
		  <img class="modal-content" id="img-full">
		  <div id="captionCtn">
		  	<div style="display: table-cell; vertical-align: middle;">
		  		<a id="prevBtn" name='prev' onclick="prevImg()">&#10094;</a>	
		  	</div>
		  	<div id="caption"></div>
		  	<div style="display: table-cell; vertical-align: middle;">
			  	<a id="nextBtn" name='next' onclick="nextImg()">&#10095;</a>
			  </div>
		  </div>
		</div>
	
</div>
			
		</div>


		<!-- JQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- tooltip library -->
		<script type="text/javascript" src="../assets/_app/tooltip/js/zebra_tooltips.src.js"></script>
		<!-- tooltip init -->
		<script type="text/javascript">
			$(document).ready(function() {
				new $.Zebra_Tooltips($('.tip'), {
					max_width: 500,
				});
			});
		</script> 
    		<script type="text/javascript" src="../assets/_app/images/js/grid-full.jq.js"></script>
		<script src="../assets/_common/js/scroll.js"></script>

		<!-- FOOTER FOOTER -->
		<?php include 'app/footer.php';?>
		<!-- FOOTER FOOTER -->
