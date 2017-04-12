<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<?php $this->view('lista/meniu');?>	
			</div>
			
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Features Items</h2>
					
					<?php 
					foreach($produse as $produs) {
						$this->view('lista/produs',array('produs'=>$produs));
					}
					?>	
					
					<div style="clear:both"></div>
					
					<ul class="pagination">
					<?php
					
						echo $paginare;

					//iteram pe numarul total de pagini 
						//for($i=1;$i<=$nr_pagini;$i++) {
							//daca pagina curenta (in browser, url) e pagina la care am ajuns, adaugam o clasa "active" in html 
						//	$activ = ($i == $pagina) ? 'active' : '';
							//afisam un html populat cu variabile, cu un link in functie de pagina
						//	echo "<li class='$activ'><a href='?pagina=$i'>$i</a></li>";
						//}
					?>
					</ul>
				</div><!--features_items-->
			</div>
		</div>
	</div>
</section>	