<?php
session_start();
include("konfigurimi.php");
$gabim = "";
if(isset($_POST["submit"])){
    if(empty($_POST["perdoruesi"])||empty($_POST["fjalekalimi"])){
        $gabim = "Plotesoni te dy fushat.";
    }else{
        $perdoruesi=$_POST['perdoruesi'];
        $fjalekalimi=$_POST['fjalekalimi'];
        $sql="SELECT id_perdoruesi  FROM perdoruesit WHERE perdoruesi='$perdoruesi' 
        and fjalekalimi='$fjalekalimi' ";
        $rezultati=mysqli_query($lidhja, $sql);
        $rreshti=mysqli_fetch_array($rezultati, MYSQLI_ASSOC);
        if(mysqli_num_rows($rezultati) == 1){
            $_SESSION['perdoruesi'] = $perdoruesi;
            header("Location:ballina.php");
        }else{
            $gabim = "Perdoruesi ose fjalekalimi eshte gabim.";
        }
    }
}
?>