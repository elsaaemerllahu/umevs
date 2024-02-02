<?php
	include_once("kontrollo.php");	
?>
<?php
include_once("konfigurimi.php");

$rezultati = mysqli_query($lidhja,
"SELECT * FROM tedhenat ORDER BY ID_tedhenat DESC");
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

	<?php include_once("headeri.php"); ?>
	<?php include_once("menyja.php"); ?>

			<div id="main" style="padding:5%; padding-top:10%;">
				<form action="" method="post">
					<!-- Content -->
					<div class="table-wrapper">
						<table>
							<thead>
								<tr>
								<h3>KERKO TE DHENAT PER MODIFIKIM</h3>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td>Shkruaj:</td>
								<td><input type="text" name="fraza" placeholder="Titulli" value="%"></td>
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
								<td>Titulli</td>
								<td>Pamja e faqes</td>
								<td>Pershkrimi</td>
								<td>Modifiko</td>
							</tr>
							<?php
							if (!empty($_REQUEST['fraza'])) {
							$fraza = mysqli_real_escape_string
							($lidhja,$_REQUEST['fraza']);     
							$sql = mysqli_query($lidhja,
							"SELECT * FROM tedhenat 
							WHERE titulli LIKE '%".$fraza."%' 
							"); 
							while($rreshti = mysqli_fetch_array($sql)) { 		
									echo "<tr>";
									echo "<td>".$rreshti['titulli']."</td>";	
									echo "<td>".$rreshti['pamjaFaqes']."</td>";	
									echo "<td>".$rreshti['pershkrimiTeDhenat']."</td>";	
									
									echo "<td><a href=\"perditesoTeDhenat.php?ID_tedhenat=$rreshti[ID_tedhenat]\" class='button' class='button primary'>
									Modifiko</a></td></tr>";		
								}
							}
							?>
						</div>
					</table>
				</div>
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