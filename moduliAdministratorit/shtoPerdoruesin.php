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
        <meta name="keywords" content="">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
			<div id="wrapper">

				<?php include("headeri.php");?>
				<?php include("menyja.php");?>
				<div id="main" style="padding:7em 2em 2em 2em;">
                	<form action="shto.php" method="post">
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                    <th colspan="2">SHTO TE DHENAT E PERDORUESIT</th>
                                    </tr>
                                </thead>
                                <tbody>
									<tr>
									<td>Perdoruesi</td>
									<td><input type="text" name="perdoruesi" id="perdoruesi"></td>
									<td></td>
									<td></td>
									<td></td>
									</tr>
									<tr>
									<td>Fjalekalimi</td>
									<td><input type="text" name="fjalekalimi" id="fjalekalimi"></td>
									<td></td>
									<td></td>
									<td></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td><td><td><input type="submit" name="shto" value="Shto"></td></td></td>
									</tr>
                                </tbody>
							</table>
						</div>
					</form>
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