<?php
include("konfigurimi.php");

$id_perdoruesi = $_GET['id_perdoruesi'];

$rezultati = mysqli_query($lidhja, "DELETE FROM perdoruesit WHERE id_perdoruesi=$id_perdoruesi");

header("Location:fshijePerdoruesin.php");
?>