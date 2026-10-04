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
		<!-- <link rel="stylesheet" href="../assets/_motion/css/format.css" type="text/css" media="screen"> -->

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
				movimento e specularità (1966 - 1969)
			</p>

			<p class="text-content">
				Il 15 dicembre del 1964 viene lanciato in orbita il primo satellite artificiale italiano: <i>San Marco 1</i>. Ed è proprio per rendere omaggio a questa “corsa allo spazio” nostrana che Pierelli, ispirandosi ai vettori spaziali, deciderà di concepire la serie scultorea <i>Saturno</i>. 
			</p>

			<div class="resp-container">

				<div class="responsive">
					<img class="resImg" src="../assets/_motion/img/thumbs/P32.jpg" data-src="../assets/_motion/img/P32.jpg"
					alt="Saturno, 1969, cm 253x67x67 (distrutta)"
					width="250" height="250">
				</div>

				<div class="responsive">
					<img class="resImg" src="../assets/_motion/img/thumbs/P16.jpg" data-src="../assets/_motion/img/P16.jpg"
					alt="Le opere: Saturno II, Saturno, Tortiglione, Monumento Inox, Saturno III (1965 - 1966)"
					width="250" height="250">
				</div>
			</div>

			<p class="text-content">
				Insieme all’ormai ben saldo campo d’indagine della specularità, l’artista sperimenta adesso, nelle sue sculture, non soltanto la molteplicità delle forme, ma anche del movimento. Le fisse e squadrate basi dei monoliti d’acciaio diventano ora supporti semisferici, che conferiscono alle opere una posizione inclinata ed orientabile. Il moto diviene il veicolo fondamentale per la trasposizione e l’alterazione della luce sulla scultura che, una volta irradiata, mostra allo spettatore un’infinità di forme e varianti possibili. L’intervento dei vari agenti atmosferici permette inoltre all’opera, non solo di muoversi, ma anche di vibrare e, dunque, produrre i suoni.
			</p>

			<div class="resp-container">

				<div class="responsive">
					<img class="resImg" src="../assets/_motion/img/thumbs/P30.jpg" data-src="../assets/_motion/img/P30.jpg"
					alt="Saturno 2, 1967, acciaio inox e piombo, cm 220x65x65"
					width="250" height="250">
				</div>

				<div class="responsive">
					<img class="resImg" src="../assets/_motion/img/thumbs/P31.jpg" data-src="../assets/_motion/img/P31.jpg"
					alt="Saturno 3, 1966, cm 250x65x65, acciaio inox, Washington (U.S.A.), The Hirshhorn Museum and Sculpture Garden "
					width="250" height="250">
				</div>

				<div class="responsive">
					<img class="resImg" src="../assets/_motion/img/thumbs/P29.jpg" data-src="../assets/_motion/img/P29.jpg"
					alt="Saturno 4, 1968, acciaio inox e piombo, cm 250x65x65"
					width="250" height="250">
				</div>
			</div>

			<p class="text-content">
				Pochi ma precisi sono i temi figurativi di Pierelli, poiché altrettanto precise sono le linee di ricerca che attraversarono il suo pensiero. A reincarnare la sua poetica ecco materializzarsi simboli apparentemente semplici, forme pure ed icone antichissime, come la sfera o il cubo. Ma, mentre quest’ultimo verrà utilizzato come strumento d’esplorazione per uno spazio esterno, uno spazio "altro", in quanto blocco chiuso e dunque impenetrabile, la prima sarà invece fonte d’ispirazione per lo studio di uno spazio interno: per via della sua stessa struttura fisica, la sfera viene vista come una forma avvolgente, aperta ad ogni esperienza. Se il cubo è pura astrazione geometrica, la sfera è sintesi concreta della natura che ci circonda.
			</p>

			<div id="p12" class="text-img big c">
				<img src="../assets/_motion/img/P12.jpg">
				<div class="overbox landscape">
					<!-- <div class="title overtext"> Title </div> -->
					<div class="tagline overtext">
						 <i>Andromeda</i>, 1969, acciaio inox, cm 64x40x90, Collezione Pierelli
					</div>
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
