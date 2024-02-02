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

	<?php include_once("headeri.php"); ?>
	<?php include_once("menyja.php"); ?>

		<div id="main" style="padding:5%; padding-top:10%;">
		<form method="post" action="shtoEkspozitenVirtuale.php" enctype="multipart/form-data" name="forma">
			<div class="row gtr-uniform">
			
				<div class="col-12">
						<h4>SHTO TE DHENAT E EKSPOZITES VIRTUALE</h4>
					<select name="id_stili">
						<option value="" selected="selected">- Zgjedh stilin -</option>
						<?php
							$res=mysqli_query($lidhja,"SELECT * FROM stilet");
							while($rreshti=$res->fetch_array())
							{
								?>
								<option value="<?php echo $rreshti['id_stili']; ?>"><?php echo $rreshti['stili']; ?></option>
								<?php
							}
							?>
					</select>
				</div>
				<div class="col-12">
					<h4>Emri i ekspozites virtuale</h4>
					<input type="text" name="ekspozitaVirtuale_emri" id="emri"/>
				</div>
				<div class="col-12">
					<h4>Fotografi</h4>
					<input type="text" name="fotografi" id="email" />
				</div>
				<div class="col-12">
					<h4>Cmimi</h4>
					<input type="text" name="cmimi" id="cmimi" />
				</div>
				<div>
				<h4>Foto</h4>
					<input type="hidden" name="MAX_FILE_SIZE" value="55000000" />
					<input name="skedariPerdoruesit" type="file" />
				</div>
			</div>
			<br>
			<ul class="actions default">
				<li><input type="submit" name="shtoEkspozitenVirtuale" value="Shto" class="primary" /></li>
			</ul>
		</form>
		<hr>
		<form action="" method="post">
			<div class="table-wrapper">
				<table>
					<thead>
						<h3>KERKO TE DHENAT E EKSPOZITES VIRTUALE PER MENAXHIM</h3>
					</thead>
					<tbody>
						<tr>
						<td>Shkruaj:</td>
						<td><input type="text" name="fraza" placeholder="Perdoruesi" value="%"></td>
						<td><input type="submit" value="Kerko"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>
		<div class="table-wrapper">
			<table>
				<thead>
					<tr>
						<th>Emri i ekspozites virtuale</th>
						<th>Fotografi</th>
						<th>Cmimi</th>
						<th>Stili</th>
						<th>Foto</th>
						<th>Emri i skedarit</th>
						<th>Modifiko</th>
						<th>Fshije</th>
					</tr>
				</thead>
				<tbody>
				<?php
					if (!empty($_REQUEST['fraza'])) {

					$fraza = mysqli_real_escape_string($lidhja,$_REQUEST['fraza']);     

				$sql = mysqli_query($lidhja,	
				"SELECT
					ev.id_ekspozitaVirtuale,
					ev.ekspozitaVirtuale_emri,
					ev.fotografi,
					ev.cmimi,
					ev.id_stili,
					ev.foto,
					ev.emri,
					s.stili
				FROM
					ekspozitatVirtuale AS ev
				INNER JOIN
					stilet AS s ON ev.id_stili = s.id_stili
				WHERE
					ev.ekspozitaVirtuale_emri LIKE '%".$fraza."%' OR ev.fotografi LIKE '%".$fraza."%'"
					); 

					while($rreshti = mysqli_fetch_array($sql)) { 		
						echo "<tr>";
						echo "<td>".$rreshti['ekspozitaVirtuale_emri']."</td>";
						echo "<td>".$rreshti['fotografi']."</td>";
						echo "<td>".$rreshti['cmimi']."</td>";
						echo "<td>".$rreshti['stili']."</td>";
						
						echo "<td><img src=data:image/jpeg;base64,".base64_encode($rreshti['foto'])." width='80'  height='100'/></td>";
						echo "<td>".$rreshti['emri']."</td>";	
						
						echo "<td><a href=\"perditesoEkspozitatVirtuale.php?id_ekspozitaVirtuale={$rreshti['id_ekspozitaVirtuale']}\" class='button small'>Modifiko</a></td>";	
echo "<td><a href=\"fshijeEkspozitenVirtuale.php?id_ekspozitaVirtuale={$rreshti['id_ekspozitaVirtuale']}\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenen?')\" class='button small'>Fshije</a></td>";

					}
				}
					?>
				</tbody>
			</table>
		</div>
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