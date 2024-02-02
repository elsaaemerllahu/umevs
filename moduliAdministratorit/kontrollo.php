<?php
include("konfigurimi.php");
session_start();
$kontrolloPerdoruesin = $_SESSION['perdoruesi'];
$ses_sql = mysqli_query($lidhja, "SELECT perdoruesi FROM perdoruesit WHERE perdoruesi='$kontrolloPerdoruesin'");
$rreshti = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
if(!isset($kontrolloPerdoruesin)){
    header("Location: index.php");
}
?>