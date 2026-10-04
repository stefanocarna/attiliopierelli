<!DOCTYPE html>
<html lang="it" class="no-js" >
  <head>

    <!-- Common head stuff -->
    <?php include 'app/head.php';?>
    
    <link rel="stylesheet" type="text/css" href="../assets/_app/css/articles/style.min.css" />

    <script src="../assets/_articles/js/modernizr.custom.js"></script>
  </head>
  
  <body class="lozad decored" data-background-image="../assets/_app/img/bkg/u7.jpg">

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
                <h1 class="title">articoli</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
        	<div class="col col-12">

		        <div id="grid-gallery" class="grid-gallery">
		          <section class="grid-wrap">
		            <ul class="grid">
		              <li class="grid-sizer"></li><!-- for Masonry column width -->

		              <?php pushArticle('E0.jpg', 'Pierelli all\'Obelisco', 'L. Trucchi', '"Momento Sera"', '16 GENNAIO 1966') ?>

		              <?php pushArticle('E6.jpg', 'Basta guardarla e canta', '', '"Panorama"', '29 GIUGNO 1967') ?>

		              <?php pushArticle('E9a.jpg', 'Un matrimonio di convenienza. Spacenick', 'G. Glueck', '"The New York Times"', '3 NOVEMBRE 1968') ?>

		              <?php pushArticleAddon('E9b.jpg', 'Un matrimonio di convenienza. Spacenick', '2') ?>

		              <?php pushArticle('E11a.jpg', 'Una rassegna…solo informativa', 'C. Melloni', '"Il Messaggero"', '24 GENNAIO 1970') ?>

		              <?php pushArticleAddon('E11b.jpg', 'Una rassegna…solo informativa', '2') ?>

		              <?php pushArticle('E14.jpg', 'Attilio Pierelli e il futuro tecnologico', 'F. Simongini', '"Vita"', '28 OTTOBRE 1972') ?>

		              <?php pushArticle('E21.jpg', 'Sculture iperspaziali per avviare il discorso', 'C. M. Palma', '"Il Popolo"', '5 LUGLIO 1975') ?>

		              <?php pushArticle('E25.jpg', 'Attilio Pierelli', 'M. Fagiolo dell\'arco', '"Il Messaggero"', '12 LUGLIO 1975') ?>

		              <?php pushArticle('E33.jpg', 'L’inaugurazione a Strasburgo del nuovo «Palazzo d’Europa»', '', '"L\'osservatore romano"', '30 GENNAIO 1977') ?>

		              <?php pushArticle('E45a.jpg', 'Attilio Pierelli', 'E. Sacco', '"Il Meridionale"', '18/25 GENNAIO 1978') ?>
		              
		              <?php pushArticleAddon('E45b.jpg', 'Attilio Pierelli', '2') ?>

		              <?php pushArticle('E48a.jpg', 'Gli iperspazi e la fisica', 'G. Arcidiacono', '"Incontri. Dibattiti e problemi di oggi"', 'OTTOBRE/DICEMBRE 1978') ?>

		              <?php pushArticleAddon('E48bc.jpg', 'Gli iperspazi e la fisica', '2') ?>

		              <?php pushArticleAddon('E48d.jpg', 'Gli iperspazi e la fisica', '3') ?>

		              <?php pushArticle('E53.jpg', 'Giocare con gli specchi (Spiel mit Spiegeln)', 'C. Stoffels', '"Kölner Standt-Anzeiger"', '14/15 GIUGNO 1980') ?>
		              
		              <?php pushArticle('E56a.jpg', 'Attilio Pierelli lo scultore dell’”Iperspazio”', 'I. Gorga', '"Sicilia Sera"', '10 GIUGNO 1982') ?>

		              <?php pushArticleAddon('E56b.jpg', 'Attilio Pierelli lo scultore dell’”Iperspazio”', '2') ?>

		              <?php pushArticle('E58.jpg', 'È conciliabile l’arte con la scienza?', 'F. Bellonzi', '"Il Tempo"', '21 GIUGNO 1982') ?>
		              
		              <?php pushArticle('E60.jpg', 'Molte antologie di saggi e di immagini', 'S. Orienti', '"Il Popolo"', '18/19 DICEMBRE 1983') ?>

		              <?php pushArticle('E66.jpg', 'È nato il «dimensionalismo»', 'V.A.', '"Il Messaggero"', '13 OTTOBRE 1987') ?>

		              <?php pushArticle('E103.jpg', 'Conoscenza chiave di lettura della contemporaneità', 'A. Pierelli', '"D’Ars"', 'MAGGIO 1996') ?>

		              <?php pushArticle('E104.jpg', 'Dall’algebra all’architettura: nasce la chiesa «iperspaziale»', 'G. Simongini', '"Il Tempo"', '17 LUGLIO 2000') ?>

		              <?php pushArticle('E105.jpg', 'L’arte «rinasce» dal lago', 'A. DE Parri', '"Corriere di Viterbo"', '21 SETTEMBRE 2002') ?>

		              <?php pushArticle('E105.jpg', 'L’iperspazio di Attilio Pierelli', 'L. Stortini', '"L\'eco"', 'APRILE 2007') ?>

		              <?php pushArticle('E110.jpg', 'L’iperspazio è più lontano senza Attilio Pierelli', 'C. Bruscia', '"Il Resto del Carlino"', '12 GIUGNO 2013') ?>

		              <?php pushArticle('E112.jpg', 'L’«Iperspazio» di Attilio Pierelli. Ecco la ‘nuova casa’ a Villa Graziani', 'C. Crisci', '"La Nazione"', '13 FEBBRAIO 2016') ?>

		              <?php pushArticle('E113.jpg', 'L’iperspazio di Pierelli trova fissa dimora in Villa', 'M. Zangarelli', '"Corriere dell’Umbria"', '16 FEBBRAIO 2016') ?>
		            </ul>
		          </section><!-- // grid-wrap -->

		          <section class="slideshow">
		          </section><!-- // slideshow -->
		        </div><!-- // grid-gallery -->
		      
		      </div>
		    </div>
      </div>

    </main>

    <?php include 'app/modal.php';?>

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js"></script>

    <script>
    	let el = document.getElementById( 'grid-gallery' )
    	let grid = el.querySelector( 'section.grid-wrap > ul.grid' );
			let slideshowImages = el.querySelectorAll( 'section.grid-wrap img' )

			var masonry = new Masonry( grid, {
				itemSelector: 'li',
				columnWidth: grid.querySelector( '.grid-sizer' )
			});

    	this.callbackLoaded = function() {
    		var waiting = false;
				for (var e of slideshowImages) {
					e.onload = function() {
						if (waiting) return;
						waiting = true;
						setTimeout(function() {
							waiting = false;
							new Masonry( grid, 'reload');
		     			}, 200);
					};
				}
    	}
    </script>
    <!-- FOOTER FOOTER -->

    <?php pushCopyright(true) ;?>
<?php include 'app/endPage.php';?>
    <!-- FOOTER FOOTER -->


  </body>
</html>