<?php include_once('konfigurimi.php'); ?>

<?php
    $rezultati = mysqli_query($lidhja, "SELECT * FROM tedhenat WHERE pamjaFaqes='headeri'");
    while ($rreshti = mysqli_fetch_assoc($rezultati)) {
    extract($rreshti);
                
    if($rezultati==null)
    mysqli_free_result($rezultati);
?>
    <section>
        <div class="alt">
            <p><?php echo $pershkrimiTeDhenat ?></p></div>
    </section>
<?php } ?>