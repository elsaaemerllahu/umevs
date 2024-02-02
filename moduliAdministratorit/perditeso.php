<?php
	include("kontrollo.php");	
?>
<?php
include_once("konfigurimi.php");

if(isset($_POST['perditeso'])){	
	$id_perdoruesi = $_POST['id_perdoruesi'];
	
	$perdoruesi=$_POST['perdoruesi'];
	$fjalekalimi=$_POST['fjalekalimi'];
	
	// checking empty fields
	if(empty($perdoruesi) || empty($fjalekalimi)) {	
			
		if(empty($perdoruesi)) {
			echo "<font color='red'>Fusha e perdoruesit eshte bosh.</font><br/>";
		}
		
		if(empty($fjalekalimi)) {
			echo "<font color='red'>Fusha e fjalekalimit eshte bosh.</font><br/>";
		}	
	} else {	
		$rezultati = mysqli_query($lidhja,"UPDATE perdoruesit SET perdoruesi='$perdoruesi',fjalekalimi='$fjalekalimi' WHERE id_perdoruesi=$id_perdoruesi");
		
		header("Location: modifikoPerdoruesin.php");
	}
}
?>

<?php
$id_perdoruesi = isset($_GET['id_perdoruesi']) ? $_GET['id_perdoruesi'] : null;

if ($id_perdoruesi !== null) {
    $sqlQuery = "SELECT * FROM perdoruesit WHERE id_perdoruesi=$id_perdoruesi";

    $rezultati = mysqli_query($lidhja, $sqlQuery);

	if ($rezultati && mysqli_num_rows($rezultati) > 0) {
        while ($res = mysqli_fetch_array($rezultati)) {
            $perdoruesi = $res['perdoruesi'];
            $fjalekalimi = $res['fjalekalimi'];

        }
    } else {
        echo "<font color='red'> Nuk ka te dhena per perdoruesin e kerkuar.</font><br/>";
    }
} else {
    echo "";
}

?>

<!DOCTYPE HTML>
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
				<form action="perditeso.php" method="post">
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
								<td><input type="text" name="perdoruesi" value='<?php echo $perdoruesi;?>' /></td>
								<td></td>
								<td></td>
								<td></td>
								</tr>
								<tr>
								<td>Fjalekalimi</td>
								<td><input type="text" name="fjalekalimi" value='<?php echo $fjalekalimi;?>' /></td>
								<td></td>
								<td></td>
								<input type="hidden" name="id_perdoruesi" value='<?php echo $_GET['id_perdoruesi'];?>' />
								<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td><td><td><input type="submit" name="perditeso" value="Modifiko"></td></td></td>
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