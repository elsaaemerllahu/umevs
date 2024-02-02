<?php
	include('kycu.php');
	
	if ((isset($_SESSION['perdoruesi']) != '')) 
	{
		header('Location: ballina.php');
	}	
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
			<?php include_once('headeri.php');?>
				<div id="main">
						<section id="intro" class="main">
						<h4>Per krijimin e llogarise dhe kycjen ne webaplikacion kontaktoni administratorin.</h4>
						<form method="post" action="">
							<div class="row gtr-uniform" >
								<div class="col-4 col-12-xsmall">
									<input type="text" name="perdoruesi" id="perdoruesi" value="" placeholder="Perdoruesi" />
									
								</div>
								<div class="col-4 col-12-xsmall">
									<input type="password" name="fjalekalimi" id="fjalekalimi" value="" placeholder="Fjalekalimi" />
								</div>
								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" name="submit" value="Kycu" class="primary" /></li>
									</ul>
								</div>
							</div>
						</form>
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