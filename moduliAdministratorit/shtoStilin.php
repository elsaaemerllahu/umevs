<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
<body>
<?php
include("konfigurimi.php");

if(isset($_POST['shtoStilin'])) {	
	$stili = $_POST['stili'];		
	if(empty($stili)) {			
		if(empty($stili)) {echo "<font color='red'>Fusha e stilit eshte e zbrazet .</font><br/>";}
		echo "<br/><a href='javascript:self.history.back();'>Kthehu pas</a>";
	} else { 
		$rezultati = mysqli_query($lidhja, "INSERT INTO stilet(stili) VALUES('$stili')");
		echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxhoStilet.php';
         }, 5000);
      </script>";
		 echo"<p><b>E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda.<b></p>";
	}
}
?>
</body>
</html>
