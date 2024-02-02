<?php
    $rezultati = mysqli_query($lidhja, "SELECT * FROM tedhenat WHERE pamjaFaqes='Header'");
    while ($reshti = mysqli_fetch_assoc($rezultati)) {
    extract($reshti);
                
    if($rezultati==null)
    mysqli_free_result($rezultati);
?>
    <section>
        <div class="alt">
            <p><?php echo $pershkrimiTeDhenat ?></p>
        </div>
    </section>
<?php } ?>