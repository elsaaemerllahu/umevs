<html>
    <head>
        <title>Shto te dhena</title>
    </head>
    <body>
    <?php
    include("konfigurimi.php");
    if(isset($_POST['shto'])){
        $perdoruesi = $_POST['perdoruesi'];
        $fjalekalimi = $_POST['fjalekalimi'];

        if(empty($perdoruesi) || empty($fjalekalimi)){
            if(empty($perdoruesi)){echo "<font color='red'>Fusha e emrit te perdoruesit eshte bosh.</font><br>";}
            if(empty($fjalekalimi)){echo "<font color='red'>Fusha e fjalekalimit eshte bosh.</font><br>";}
            echo "<br><a href='javascript:self.history.back();'>Kthehu pas</a>";
        }else{
            $result = mysqli_query($lidhja, "INSERT INTO perdoruesit (perdoruesi, fjalekalimi) VALUES('$perdoruesi', '$fjalekalimi')");
            echo "<script>
                setTimeout(function(){
                    window.location.href = 'perdoruesit.php';
                }, 5000);
            </script>";
            echo "<p><b>E dhena eshte duke u regjistruar ne sistem. Ju lutem prisni 5 sekonda.</b></p>";
        }
    }
    ?>
    </body>
</html>