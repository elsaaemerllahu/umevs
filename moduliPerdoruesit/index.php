<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php include("konfigurimi.php"); ?>
<html>
	<head>
		<title>Moduli Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">
		<header id="header" class="alt">
			<h1>Uebaplikacioni per Menaxhimin e Ekspozitave <br>Virtuale sipas Stilit <br>UMEVS</h1>
		</header>
		<?php include_once("menyja.php"); ?>

		<div id="main">
		<?php
// Fetch data for the first section (assuming you have a condition for the first set of images)
$result_section1 = mysqli_query($lidhja, "SELECT 
s1.stili, 
ev1.ekspozitaVirtuale_emri, 
ev1.fotografi, 
ev1.cmimi, 
ev1.foto, 
ev1.emri 
FROM ekspozitatVirtuale AS ev1
LEFT OUTER JOIN 
stilet AS s1 ON s1.id_stili = ev1.id_stili
WHERE s1.id_stili=1
GROUP BY s1.stili, 
ev1.ekspozitaVirtuale_emri, 
ev1.fotografi, 
ev1.cmimi, 
ev1.foto,
ev1.emri
ORDER BY s1.id_stili, ev1.id_ekspozitaVirtuale DESC LIMIT 3");

$images_section1 = mysqli_fetch_all($result_section1, MYSQLI_ASSOC);

// Fetch data for the second section (adjust the condition accordingly)
$result_section2 = mysqli_query($lidhja, "SELECT 
s2.stili, 
ev2.ekspozitaVirtuale_emri, 
ev2.fotografi, 
ev2.cmimi, 
ev2.foto, 
ev2.emri 
FROM ekspozitatVirtuale AS ev2
LEFT OUTER JOIN 
stilet AS s2 ON s2.id_stili = ev2.id_stili
WHERE s2.id_stili=2
GROUP BY s2.stili, 
ev2.ekspozitaVirtuale_emri, 
ev2.fotografi, 
ev2.cmimi, 
ev2.foto,
ev2.emri
ORDER BY s2.id_stili, ev2.id_ekspozitaVirtuale DESC");

$images_section2 = mysqli_fetch_all($result_section2, MYSQLI_ASSOC);?>
		<section class="main special">
			<header class="major">
				<h2>Ekspozita me fotografi arkitekturore</h2>
			</header>
			<div class="row gtr-uniform">
 					<?php
                    foreach ($images_section1 as $image1) {
                    ?>
                        <div class="col-4">
                            <span class="image fit">
                                <?php echo '<img src="data:image/jpg;base64,' . base64_encode($image1['foto']) . '" width="100%" height="100%">'; ?>
                            </span>
                            <h3><?php echo $image1['ekspozitaVirtuale_emri']; ?></h3>
                            <p><?php echo $image1['fotografi']; ?></p>
							<p><?php echo $image1['cmimi']; echo '€'?></p>
                        </div>
                    <?php } ?>
			</div>
		</section>
		<section class="main special">
			<header class="major">
				<h2>Ekspozita me fotografi te natyres</h2>
			</header>
			<div class="row gtr-uniform">
 					<?php
                    foreach ($images_section2 as $image2) {
                    ?>
                        <div class="col-4">
                            <span class="image fit">
                                <?php echo '<img src="data:image/jpg;base64,' . base64_encode($image2['foto']) . '" width="100%" height="100%">'; ?>
                            </span>
                            <h3><?php echo $image2['ekspozitaVirtuale_emri']; ?></h3>
                            <p><?php echo $image2['fotografi']; ?></p>
							<p><?php echo $image2['cmimi']; echo '€'?></p>  
                        </div>
                    <?php } ?>
			</div>
		</section>
			</div>
		</div>
		
	<?php include("footer.php"); ?>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	</body>
</html>