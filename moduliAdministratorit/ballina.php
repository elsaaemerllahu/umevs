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

		<div id="wrapper">

		<?php include_once("headeri.php"); ?>
		<?php include_once("menyja.php"); ?>
			<div id="main">
			<section id="content" class="main">
				<section>
					<header style="text-align:center;">
						<h2>Menaxhimi i te dhenave te ballines</h2>
					</header>
					<div class="card card-1" style="margin-left: 15%"><a href="menaxhoStilet.php"><h3>Menaxho stilet</h3></a>
					<p>Forma per menaxhimin e <br> stileve.</p>
					</div>
					<div class="card card-1" style="margin-left:5%"><a href="menaxhoEkspozitatVirtuale.php"><h3>Menaxho ekspozitat</h3></a>
					<p>Forma per menaxhimin e ekspozitave virtuale.</p>
					</div>
					<div class="col-6" style="padding: 2%">
					<ul class="actions small">
						<li><a href="ajax/index.php" class="button small">Voto</a></li>
					</ul>
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
			<script src="assets/js/main.js"></script>

	</body>
</html>