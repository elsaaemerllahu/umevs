<?php
include("konfigurimi.php");

$id_stili = $_GET['id_stili'];

$rezultati = mysqli_query($lidhja,"DELETE FROM stilet WHERE id_stili=$id_stili");

header("Location:menaxhoStilet.php");
?>
