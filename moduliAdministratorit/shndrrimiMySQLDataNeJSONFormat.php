<?php
$dbhosti ="localhost";
$dbperdoruesi = "root";
$dbpass = "";
$dbemri="umevs";

$lidhja = @mysqli_connect($$dbhosti, $dbperdoruesi, $dbpass, $dbemri) or die("Lidhja me databaze nuk u realizua.");

$query = "SELECT * FROM stilet";

$rezultati = mysqli_query($lidhja, $query);
if(!$rezultati){
    echo "Query nuk u ekzekutua."; die();
} else {
    $tedhenat = array();
    while($rreshti = mysqli_fetch_assoc($rezultati)){
        $tedhenat[] = $rreshti;
    }
    $fp = fopen('test.json', 'w');
    fwrite($fp, json_encode($tedhenat, JSON_PRETTY_PRINT));
    echo "Skedari u krijua.";
    fclose($fp);
}
?>