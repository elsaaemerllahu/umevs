<?php
	include("kontrollo.php");	
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
			<?php include_once('headeri.php');?>
			<?php include_once('menyja.php');?>
			<div id="main">
				<section id="content" class="main">
					
						<section>
						<header style="text-align:center;">
							<h2>Menaxhimi i te dhenave te perdoruesve</h2>
						</header>
							<div class="card card-1"><a href="shtoPerdoruesin.php"><h3>Shto perdorues</h3></a>
							<p>Forma per shtimin e perdoruesve te rinje ne uebaplikacion me te drejta te administratorit</p>
							</div>
							<div class="card card-1"><a href="modifikoPerdoruesin.php"><h3>Modifiko perdorues</h3></a>
							<p>Forma per modifikim te perdoruesve aktual ne uebaplikacion me te drejta te administratorit</p>
							</div>
							<div class="card card-1"><a href="fshijePerdoruesin.php"><h3>Fshij perdorues</h3></a>
							<p>Forma per fshirje te perdoruesve aktual nga uebaplikacioni me te drejta te administratorit</p>
							</div>
						</section>
				</section>
				</div>
			</div>
			<?php include_once("footer.php"); ?>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets
			/js/main.js"></script>

	</body>
</html>