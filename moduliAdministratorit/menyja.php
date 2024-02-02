<?php
    $rezultati = mysqli_query($lidhja, "SELECT * FROM tedhenat WHERE pamjaFaqes='Menyja'");
    while ($rreshti = mysqli_fetch_assoc($rezultati)) {
        extract($rreshti);
        echo $pershkrimiTeDhenat;
                
        if($rezultati==null)
        mysqli_free_result($rezultati);
	}
?>
						
			