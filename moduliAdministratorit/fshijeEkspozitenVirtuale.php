<?php
include("konfigurimi.php");

$id_ekspozitaVirtuale = $_GET['id_ekspozitaVirtuale'];

$rezultati = mysqli_query($lidhja, "DELETE FROM ekspozitatVirtuale WHERE id_ekspozitaVirtuale=$id_ekspozitaVirtuale");

header("Location:menaxhoEkspozitatVirtuale.php");
?>