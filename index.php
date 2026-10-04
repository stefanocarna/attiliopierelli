<!DOCTYPE html>
<html lang="it" class="no-js" >
	<head>

		<!-- Common head stuff -->
		<?php include 'ita/app/head.php';?>

		<link rel="stylesheet" type="text/css" href="assets/_app/css/index/style.min.css">
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

	</head>
<body>

	<div style="position: absolute; width: 100%; min-height: 50%; max-height: 80%; top: 25%;">

		<div class="cube">

			<div class="out" id="top"></div>
			<div class="out" id="front"></div>
			<div class="out" id="right"></div>
			<div class="out" id="left"></div>
			<div class="out" id="back"></div>
			<div class="out" id="bottom"></div>

			<div class="in" id="top"></div>
			<div class="in" id="front"></div>
			<div class="in" id="right"></div>
			<div class="in" id="left"></div>
			<div class="in" id="back"></div>
			<div class="in" id="bottom"></div>

		</div>​

		<div style="width: 90%; position: absolute; display: block; left: 5%; right: 5%;">
			<div class="tile">
				<p>attilio pierelli</p>
			</div>

			<a id="btn-it" href="ita/home" class="button button--aylen button--border-thin button--round-s" style="font-family: Courier; float: none; margin: auto;">
					entra
			</a>
		   <!--  <a id="btn-it" href="ita/home" class="button button--aylen button--border-thin button--round-s" style="font-family: Courier;">
					italiano
			</a>

			<a id="btn-en" href="old/index.html" class="button button--aylen button--border-thin button--round-s" style="font-family: Courier;">
				   english
			</a> -->

		</div>
	</div>

	<style>
			@keyframes bounceIn {
				0% {
				transform: scale(0.7);
				opacity: 0;
				}
				60% {
				transform: scale(1.2);
				opacity: 1;
				}
				100% {
				transform: scale(1.2) translateY(-30px);
				opacity: 1;
				}
			}


			.tile {
				animation: bounceIn 2s;
				animation-delay: 1.5s;
				-webkit-animation-fill-mode: forwards;
			}
			

		</style>

		<?php pushCopyright(false) ?>

</body>
</html>