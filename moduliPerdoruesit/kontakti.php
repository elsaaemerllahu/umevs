<?php
include("konfigurimi.php");
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="keywords" content="">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		
	<div id="wrapper">

	<?php include("headeri.php"); ?>
    <nav id="nav">
        <ul>
            <li><a href="index.php">Ballina</a></li>

        </ul>
    </nav>

    <div id="main" style="padding:5%; padding-top:10%;">
    <section>
        <h3>FORMA PER KONTAKT</h3>
        <form method="post" action="shtoKontaktin.php">
            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    Subjekti
                    <input type="text" name="subjekti" id="subjekti" value="" />
                </div>
                
                <div class="col-6 col-12-xsmall">
                    Email-i
                    <input type="email" name="email" id="email" value="" />
                </div>
                <div class="col-12">
                    Mesazhi
                    <textarea name="mesazhi" id="mesazhi" rows="6"></textarea>
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" name="shtoKontaktin" value="Dergo" class="primary" /></li>
                        <li><input type="reset" value="Fshij" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </section>
    </div>
	</div>
	<?php include("footer.php"); ?>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>