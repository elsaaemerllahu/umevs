<?php
	include("kontrollo.php");	
?>

<?php
include("konfigurimi.php");

if(isset($_POST['perditesoEkspozitatVirtuale']))
{	
	$id_ekspozitaVirtuale = $_POST['id_ekspozitaVirtuale'];
	$ekspozitaVirtuale_emri=$_POST['ekspozitaVirtuale_emri'];
	$fotografi = $_POST['fotografi'];
    $cmimi = $_POST['cmimi']; 
	$id_stili=$_POST['id_stili'];	
	
	if (isset($_FILES['userfile']) && is_uploaded_file($_FILES['userfile']['tmp_name'])) {
		$imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
		$emri = $_FILES['userfile']['name'];
		$maxsize =55000000; 
	} else {
		$imgData = null;
		$emri = null;
		$maxsize = 55000000; 
	}
	
	if(empty($ekspozitaVirtuale_emri) || empty($fotografi) || empty($cmimi)) {	
			
		if(empty($ekspozitaVirtuale_emri)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		
		if(empty($fotografi)) {
			echo "<font color='red'>fotografi field is empty.</font><br/>";
		}
		
		if(empty($cmimi)) {
			echo "<font color='red'>cmimi field is empty.</font><br/>";
		}	
	} else {	
		$rezultati = mysqli_query($lidhja,"UPDATE ekspozitatvirtuale SET ekspozitaVirtuale_emri='$ekspozitaVirtuale_emri',fotografi='$fotografi',cmimi='$cmimi',id_stili='$id_stili', foto='$imgData', emri='$emri' WHERE id_ekspozitaVirtuale=$id_ekspozitaVirtuale");
		
		header("Location: menaxhoEkspozitatVirtuale.php");
	}
}
?>
<?php

$id_ekspozitaVirtuale = $_GET['id_ekspozitaVirtuale'];

$rezultati = mysqli_query($lidhja,"SELECT * FROM ekspozitatvirtuale WHERE id_ekspozitaVirtuale=$id_ekspozitaVirtuale");

while($res = mysqli_fetch_array($rezultati))
{
	$ekspozitaVirtuale_emri = $res['ekspozitaVirtuale_emri'];
	$fotografi = $res['fotografi'];
	$cmimi = $res['cmimi'];
	$id_stili = $res['id_stili'];
}
?>

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
		<form enctype="multipart/form-data"  name="forma" method="post" action="perditesoEkspozitatVirtuale.php">			
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
						<input type="text" name="ekspozitaVirtuale_emri" id="emri" value='<?php echo $ekspozitaVirtuale_emri?>' required />
					</div>
					<div class="col-12">
						<h4>Fotografi</h4>
						<input type="text" name="fotografi" id="email" value='<?php echo $fotografi?>' required  />
					</div>
					<div class="col-12">
						<h4>cmimi</h4>
						<input type="text" name="cmimi" id="cmimi" value='<?php echo $cmimi?>' required />
					</div>
					<div>
					<h4>Foto</h4>
						<input type="hidden" name="MAX_FILE_SIZE" value="55000000" />
						<input name="userfile" type="file" />
					</div>
				</div>
				<br>
				<ul class="actions default">
					<input type="hidden" name="id_ekspozitaVirtuale" value='<?php echo $_GET['id_ekspozitaVirtuale'];?>' />
					<li><input type="submit" name="perditesoEkspozitatVirtuale" value="Modifiko" class="primary" /></li>
				</ul>

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