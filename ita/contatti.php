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

		<!-- menu css -->
		<link rel="stylesheet" href="../assets/_common/css/menu.css" type="text/css" media="screen">

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
				contattaci
			</p>

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
