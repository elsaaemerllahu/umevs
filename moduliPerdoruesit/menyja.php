<?php
    $rezultati = mysqli_query($lidhja, "SELECT * FROM tedhenat WHERE pamjaFaqes='MenyjaP'");
    while ($reshti = mysqli_fetch_assoc($rezultati)) {
        extract($reshti);
        echo $pershkrimiTeDhenat;
                
        if($rezultati==null)
        mysqli_free_result($rezultati);
	}
?>
						
			