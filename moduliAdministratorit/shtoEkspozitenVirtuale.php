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
        include('konfigurimi.php');
        
        if(isset($_POST['shtoEkspozitenVirtuale'])) {	
        $ekspozitaVirtuale_emri = $_POST['ekspozitaVirtuale_emri'];
        $fotografi = $_POST['fotografi'];
        $cmimi = $_POST['cmimi'];
        $id_stili = $_POST['id_stili'];

        $imgData =addslashes (file_get_contents($_FILES['skedariPerdoruesit']['tmp_name']));
        $name = $_FILES['skedariPerdoruesit']['name'];
        
        $maxsize = 55000000; 
 
        if(empty($ekspozitaVirtuale_emri) || empty($fotografi)|| empty($cmimi)) {
                    
            if(empty($ekspozitaVirtuale_emri)) {
                echo "<font color='red'>Fusha e ekspozites virtuale eshte e zbrazet.</font><br/>";
            }
            
            if(empty($fotografi)) {
                echo "<font color='red'>Fusha e fotografit eshte e zbrazet.</font><br/>";
            }
            
            if(empty($cmimi)) {
                echo "<font color='red'>Fusha e permbajtjes eshte e zbrazet.</font><br/>";
            }
            echo "<br/><a href='javascript:self.history.back();'>Kthehu pas</a>";
        } else { 
            $rezultati = mysqli_query($lidhja, "INSERT INTO ekspozitatvirtuale(ekspozitaVirtuale_emri,fotografi,cmimi, id_stili, foto, emri) VALUES('$ekspozitaVirtuale_emri','$fotografi','$cmimi', '$id_stili', '$imgData', '$name')");
            
            echo "<script>
            setTimeout(function(){
                window.location.href = 'menaxhoEkspozitatVirtuale.php';
            }, 5000);
        </script>";
            echo"<p><b>E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 deri ne 10 sekonda. <b></p>";
        }
    }
    ?>

    </body>
</html>