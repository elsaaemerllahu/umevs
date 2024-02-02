<footer id="footer">
	<div class="left-section">
			
		<?php
				
		$rezultati = mysqli_query($lidhja, "SELECT * FROM tedhenat WHERE pamjaFaqes='footerAdresa'");
		while ($reshti = mysqli_fetch_assoc($rezultati)) {
			extract($reshti);  
			if($rezultati==null)
			mysqli_free_result($rezultati);
            ?>
			<section>
				<p><?php echo $pershkrimiTeDhenat; ?>
				</p>
			</section>
			<?php } ?>
		

			<?php
            $rezultati = mysqli_query($lidhja, "SELECT * FROM tedhenat WHERE pamjaFaqes='footerRrjetetS'");
            while ($reshti = mysqli_fetch_assoc($rezultati)) {
            	extract($reshti);		  			  
				if($rezultati==null)
				mysqli_free_result($rezultati);
            ?>
			<section>
				<?php echo $pershkrimiTeDhenat; ?>
			</section>
			<?php } ?>
		</div>
		<div class="copyright">
					
			<?php
            $rezultati = mysqli_query($lidhja, "SELECT * FROM tedhenat WHERE pamjaFaqes='footerCopyrights'");
            while ($reshti = mysqli_fetch_assoc($rezultati)) {
            extract($reshti);			  
			if($rezultati==null)
			mysqli_free_result($rezultati);
            ?>		
			<?php echo $pershkrimiTeDhenat; ?>		
			<?php } ?>
						
		</div>
	
</footer>