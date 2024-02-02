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
		<title>Modifiko Stilet</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="keywords" content="">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
	<div id="wrapper">
		<?php include_once("headeri.php"); ?>
		
		<?php include_once("menyja.php"); ?>



				<!-- Main -->
                    <div id="main" style="padding:5%; padding-top:10%;">
                    <form method="post" action="shtoStilin.php">
                        <h3>SHTO STILIN</h3>
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="stili" id="stili" value="" placeholder="Stili" />
                            </div>
                            <div class="col-6">
                                <ul class="actions">
                                    <li><input type="submit" value="Shto" class="primary" name="shtoStilin"/></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                	<form action="" method="post">
						<!-- Content -->
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                    <h3>KERKO STILIN PER MODIFIKIM OSE FSHIRJE</h3>
                                    </tr>
                                </thead>
                                <tbody>
									<tr>
									<td>Shkruaj:</td>
									<td><input type="text" name="fraza" placeholder="Stili" value="%"></td>
									<td><input type="submit" value="Kerko"></td>
									</tr>
                                </tbody>
							</table>
						</div>
					</form>
                    <div class="table-wrapper">
                        <table>
                            <div class="table-wrapper">
                                <tr>
                                    <td>Stili</td>
                                    <td>Modifiko</td>
                                    <td>Fshije</td>
                                </tr>
                                <?php
							if (!empty($_REQUEST['fraza'])) {
								$fraza = mysqli_real_escape_string
								($lidhja,$_REQUEST['fraza']);     
								$sql = mysqli_query($lidhja,
								"SELECT * FROM stilet 
								WHERE stili LIKE '%".$fraza."%'"); 
								while($rreshti = mysqli_fetch_array($sql)) { 		
										echo "<tr>";
										echo "<td>".$rreshti['stili']."</td>";
										echo "<td><a href=\"perditesoStilin.php?id_stili=$rreshti[id_stili]\" class='button' class='button primary'>
								Modifiko</a></td>";
								echo "<td><a href=\"fshijeStilin.php?id_s
								tili=$rreshti[id_stili]\" onClick=\"return confirm('A jeni i/e sigurt se deshironi te fshini stilin?')\" class='button' class='button primary'>Fshije</a>
										</td></tr>";		
									}
	
								}

							?>
                            </div>
                        </table>
                    </div>
				</div>
				<?php include_once("footer.php"); ?>
							
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