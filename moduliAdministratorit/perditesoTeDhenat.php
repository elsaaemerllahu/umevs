<?php
	include("kontrollo.php");	
?>
<?php

include_once("konfigurimi.php");

if(isset($_POST['perditesoTeDhenat']))
{	
	$ID_tedhenat = $_POST['ID_tedhenat'];
	
	$titulli=$_POST['titulli'];
	$pamjaFaqes=$_POST['pamjaFaqes'];
	$pershkrimiTeDhenat=$_POST['pershkrimiTeDhenat'];			
	
	if(empty($titulli) || empty($pamjaFaqes) || empty($pershkrimiTeDhenat)){	
			
		if(empty($titulli)) {
			echo "<font color='red'>Fusha e titullit eshte bosh.</font><br/>";
		}
		if(empty($pamjaFaqes)) {
			echo "<font color='red'>Fusha e pamjes eshte bosh.</font><br/>";
		}
		if(empty($pershkrimiTeDhenat)) {
			echo "<font color='red'>Fusha e pershkrimit eshte bosh.</font><br/>";
		}
	} else {	
		$rezultati = mysqli_query($lidhja,"UPDATE tedhenat SET titulli='$titulli',pamjaFaqes='$pamjaFaqes', pershkrimiTeDhenat='$pershkrimiTeDhenat' WHERE ID_tedhenat=$ID_tedhenat");
		
		header("Location: modifikoTeDhenat.php");
	}
}
?>
<?php
$ID_tedhenat = $_GET['ID_tedhenat'];
echo "Current URL: " . htmlspecialchars($_SERVER['REQUEST_URI']) . "<br>";
echo "ID_tedhenat from URL: " . $ID_tedhenat . "<br>";
$rezultati = mysqli_query($lidhja,"SELECT * FROM tedhenat WHERE ID_tedhenat=$ID_tedhenat");

while($res = mysqli_fetch_array($rezultati))
{
	$titulli = $res['titulli'];
	$pamjaFaqes = $res['pamjaFaqes'];
	$pershkrimiTeDhenat = $res['pershkrimiTeDhenat'];
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
        <meta name="keywords" content="">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		
	<div id="wrapper">

	<?php include_once("headeri.php"); ?>
	<?php include_once("menyja.php"); ?>

    <div id="main" style="padding:5%; padding-top:10%;">
    <section><?php
    // Debugging form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<p>Form submitted with the following values:</p>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
    ?>
        <h3>MODIFIKO TE DHENAT</h3>
        <form method="post" action="perditesoTeDhenat.php">
            <div class="row gtr-uniform">
                <div class="col-12">
                Titulli
                    <input type="text" name="titulli" value='<?php echo $titulli;?>' required />
                </div>
                <div class="col-12">
                    Pamja e faqes
                    <input type="text" name="pamjaFaqes" value='<?php echo $pamjaFaqes;?>' required />
                </div>
                <div class="col-12">
                    Pershkrimi
                    <textarea name="pershkrimiTeDhenat"  rows="6"><?php echo $pershkrimiTeDhenat;?></textarea>
                </div>
				
                <div class="col-12">
                    <ul class="actions">
                    <li><input type="hidden" name="ID_tedhenat" value='<?php echo $_GET['ID_tedhenat'];?>' /></li>
                        <li><input type="submit" name="perditesoTeDhenat" value="Modifiko" class="primary" /></li>
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


