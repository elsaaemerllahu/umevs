<?php
include('kontrollo.php');
?>
<?php
include('konfigurimi.php');
$rezultati = mysqli_query($lidhja, "SELECT * FROM perdoruesit ORDER BY id_perdoruesi DESC");
?>

<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Fshirja e perdoruesve</title>
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
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                    <th colspan="2">KERKO TE DHENAT E PERDORUESIT PER FSHIRJE</th>
                                    </tr>
                                </thead>
                                <tbody>
									<tr>
									<td>Shkruaj:</td>
									<td><input type="text" name="fraza" placeholder="Perdoruesin ose Email-in" value="%"></td>
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
									<td></td>
									<td></td>
                                    <td>Perdoruesi</td>
                                    <td>Fjalekalimi</td>
                                    <td>Fshije</td>
                                </tr>
                            <?php
                            if(!empty($_REQUEST['fraza'])){
                                $fraza = mysqli_real_escape_string($lidhja, $_REQUEST['fraza']);
                                $sql = mysqli_query($lidhja, "SELECT * FROM perdoruesit WHERE perdoruesi LIKE '%".$fraza."%' ");
                                while($rreshti = mysqli_fetch_array($sql)){
                                    echo "<tr>";
									echo "<td></td>";
									echo "<td></td>";
                                    echo "<td>".$rreshti['perdoruesi']."</td>";
                                    echo "<td>".$rreshti['fjalekalimi']."</td>";
                                    echo "<td><a href=\"fshije.php?id_perdoruesi=$rreshti[id_perdoruesi]\" onClick=\"return confirm('A jeni i/e sigurt qe deshironi te fshini perdoruesin')\" class='button' class='button primary'>Fshije</a>
                                    </td></tr>";
                                }
                            }
                            ?>
                            </div>
                        </table>
                    </div>
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