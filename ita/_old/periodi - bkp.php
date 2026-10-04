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


		<link href="../assets/_period/css/demo.css" rel="stylesheet" />
		<link href="../assets/_period/css/set1.css" rel="stylesheet" />

		<!-- menu css -->
		<link rel="stylesheet" href="../assets/_common/css/menu.css" type="text/css" media="screen">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	</head>
	<body id="u7" class="demo-2">

		<!-- MENU MENU MENU -->
		<?php include 'app/header.php';?>
		<!-- MENU MENU MENU -->

		<div id="top-page" style="position: absolute; margin-top: -10%;" ></div>

		<a href="#top-page" class="go-top">
			<i class="fa fa-chevron-circle-up"></i>
		</a>

		<div class="container">

			<div class="content">

				<p class="text-header">
					periodi
				</p>

				<div class="grid">
					<figure class="effect-oscar">
						<img src="../assets/_period/img/01.jpg" alt="img09"/>
						<figcaption>
							<h2>barlumi</h2>
							<p>(1958-1961)</p>
							<a href="barlumi">View more</a>
						</figcaption>			
					</figure>

					<figure class="effect-oscar">
						<img src="../assets/_period/img/02.jpg" alt="img09"/>
						<figcaption>
							<h2>riflessioni</h2>
							<p>(1961-1963)</p>
							<a href="riflessioni">View more</a>
						</figcaption>			
					</figure>

					<figure class="effect-oscar">
						<img src="../assets/_period/img/03.jpg" alt="img09"/>
						<figcaption>
							<h2>forma e specularità</h2>
							<p>(1963-1973)</p>
							<a href="form-spec">View more</a>
						</figcaption>			
					</figure>

					<figure class="effect-oscar">
						<img src="../assets/_period/img/04.jpg" alt="img09"/>
						<figcaption>
							<h2>suono e specularità</h2>
							<p>(1965-1969)</p>
							<a href="suon-spec">View more</a>
						</figcaption>			
					</figure>

					<figure class="effect-oscar">
						<img src="../assets/_period/img/05.jpg" alt="img09"/>
						<figcaption>
							<h2>movimento e specularìtà</h2>
							<p>(1966-1969)</p>
							<a href="mov-spec">View more</a>
						</figcaption>			
					</figure>

					<figure class="effect-oscar">
						<img src="../assets/_period/img/06.jpg" alt="img09"/>
						<figcaption>
							<h2>luce e rifrazione</h2>
							<p>(1967-1971)</p>
							<a href="luce-rif">View more</a>
						</figcaption>			
					</figure>

					<figure class="effect-oscar">
						<img src="../assets/_period/img/07.jpg" alt="img09"/>
						<figcaption>
							<h2>scultura ambiente ipnotico</h2>
							<p>(1973-1975)</p>
							<a href="ipno-env">View more</a>
						</figcaption>			
					</figure>

					<figure class="effect-oscar">
						<img src="../assets/_period/img/08.jpg" alt="img09"/>
						<figcaption>
							<h2>luce e geometria</h2>
							<p>(1974-1983)</p>
							<a href="luce-geo">View more</a>
						</figcaption>			
					</figure>

					<figure class="effect-oscar">
						<img src="../assets/_period/img/09.jpg" alt="img09"/>
						<figcaption>
							<h2>teoria degli universi</h2>
							<p>(dal 1979)</p>
							<a href="teoria-universi">View more</a>
						</figcaption>			
					</figure>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
		<script src="../assets/_period/js/anime.min.js"></script>
		<script src="../assets/_period/js/main.js"></script>
		<script>
			(function() {
				[].slice.call(document.querySelectorAll('.grid--effect-hamal > .grid__item')).forEach(function(stackEl) {
					new HamalFx(stackEl);
				});
			})();
		</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
		<script src="../assets/_common/js/scroll.js"></script>
		<!-- FOOTER FOOTER -->
		<?php include 'app/footer.php';?>
		<!-- FOOTER FOOTER -->
	</body>
</html>