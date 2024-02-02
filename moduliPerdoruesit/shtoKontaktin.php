<html>
    <head>
        <title>Moduli Perdoruesit</title>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        <?php
        include("konfigurimi.php");
        if(isset($_POST['shtoKontaktin'])) {	
            $subjekti = $_POST['subjekti'];
            $email = $_POST['email'];
            $mesazhi = $_POST['mesazhi'];
            

            if(empty($subjekti) || empty($email) || empty($mesazhi)) {			
                if(empty($subjekti)) {echo "<font color='red'>Fusha per subjekt eshte e zbrazet.</font><br/>";}
                if(empty($email)) {echo "<font color='red'>Fusha per email eshte e zbrazet.</font><br/>";}
                if(empty($mesazhi)) {echo "<font color='red'>Fusha per mesazh eshte e zbrazet.</font><br/>";}
                
                echo "<br/><a href='javascript:self.history.back();'>Khtehu pas</a>";
            } else { 
                $rezultati = mysqli_query($lidhja, "INSERT INTO kontakti(subjekti,email, mesazhi) VALUES('$subjekti','$email','$mesazhi')");
                echo "<script>
                 setTimeout(function(){
                    window.location.href = 'index.php';
                 }, 5000);
              </script>";
                 echo"<p><b>E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda.<b></p>";
            }
        }
        ?>
    </body>
</html>