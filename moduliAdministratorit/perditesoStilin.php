<?php
	include("kontrollo.php");	
?>
<?php
include_once("konfigurimi.php");

if(isset($_POST['perditesoStilin']))
{	
	$id_stili = $_POST['id_stili'];
	
	$stili=$_POST['stili'];

	if(empty($stili) ) {	
			
		if(empty($stili)) {
			echo "<font color='red'>stili field is empty.</font><br/>";
		}
		
	
	} else {	
		$rezultati = mysqli_query($lidhja,"UPDATE stilet SET stili='$stili' WHERE id_stili=$id_stili");
		
		header("Location: menaxhoStilet.php");
	}
}
?>

<?php
$id_stili = $_GET['id_stili'];
if ($id_stili !== null) {

    $rezultati = mysqli_query($lidhja, "SELECT * FROM stilet WHERE id_stili=$id_stili");

    while ($res = mysqli_fetch_array($rezultati)) {
        $stili = $res['stili'];
    }
} else {
    echo "<font color='red'>Stili nuk ekziston.</font><br/>";
}
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
    <div id="wrapper">
		<?php include_once("headeri.php"); ?>
		<?php include_once("menyja.php"); ?>

		<div id="main" style="padding:7em 2em 0em 2em;">
			<form action="perditesoStilin.php" method="post">
				<div class="table-wrapper">
					<table>
						<thead>
							<tr>
							<th colspan="2">Modifiko te dhenat e stilit</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<td>Stili</td>
							<td><input type="text"name="stili" value='<?php echo $stili;?>'   required /> <br>
							<input type="hidden" name="id_stili" value='<?php echo $_GET['id_stili'];?>' />
							<td></td>
							<td></td>
							<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><td><td><input type="submit" name="perditesoStilin" value="Modifiko"></td></td></td>
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