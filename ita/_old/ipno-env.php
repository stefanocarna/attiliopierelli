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
		<!-- <link rel="stylesheet" href="../assets/_ipno/css/format.css" type="text/css" media="screen"> -->

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
				scultura ambiente ipnotico (1973 - 1975)
			</p>

			<p class="text-content">
				Le opere di questo periodo vengono concepite di grandi dimensioni, poiché una volta inserite nell’ambiente che le ospita, esse sono in grado di creare una scansione spaziale del tutto eccezionale. Le lamiere metalliche vengono disposte a mo’ di quinte insolite e la loro composizione permette allo spettatore di percorrere un breve ambulacro, all’interno del quale viene contemporaneamente risucchiato e proiettato. 
				In <i>Ipercilindro</i> lo spazio circostante penetra e si dilata, la luce viene assorbita e le superfici prendono vita mediante surreali giochi visivi; un moto fluttuante ed in perpetua mutazione governa le immagini che vanno creandosi. Inserendo l’opera in ambienti piccoli e stretti, come i vicoli dei paesini o le stradine antiche, l’artista decide di espandere e cambiare la realtà intorno all’osservatore, stimolandolo a rileggere le figure radicate nel presente e proponendogli una percezione ottica del “possibile” completamente inedita.
				Pierelli scopre così l’intento primario di queste strutture mutevoli: catapultare lo spettatore in regioni pluridimensionali!
			</p>

			<div class="resp-container">

				<div class="responsive">
					<img class="resImg" src="../assets/_ipno/img/thumbs/P48.jpg" data-src="../assets/_ipno/img/P48.jpg"
					alt="Attilio Pierelli supervisiona la saldatura di Ipercilindro nell’officina di Gastone Di Pietro, Roma, anni ’70"
					width="250" height="250">
				</div>

				<div class="responsive">
					<img class="resImg" src="../assets/_ipno/img/thumbs/P49.jpg" data-src="../assets/_ipno/img/P49.jpg"
					alt="Ipercilindro (o Solarium), 1975, acciaio inox, cm 300x300x300"
					width="250" height="250">
				</div>

				<div class="responsive">
					<img class="resImg" src="../assets/_ipno/img/thumbs/P45.jpg" data-src="../assets/_ipno/img/P45.jpg"
					alt="Attilio Pierelli all’interno di Ipercilindro durante la mostra Sculture in Piazza Margana, Roma, 1973"
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
