<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 padding-right">
				<div class="product-details"><!--product-details-->
					<div class="col-sm-5">
						<div class="view-product">
							<img src="<?=base_url();?>public/images/shop/product<?=$produs['id_imagine']?>.jpg" alt="" />
							<h3><?=$produs['nume']?></h3>
						</div>
						<?php $this->view('produs/asemanatoare'); ?>
					</div>
					<div class="col-sm-7">
						<div class="product-information"><!--/product-information-->
							<img src="public/images/product-details/new.jpg" class="newarrival" alt="" />
							<h2><?=$produs['nume']?></h2>
							<p>Web ID: 1089772</p>
							<img src="public/images/product-details/rating.png" alt="" />
							<span>
								<span><?=$produs['pret']?> Lei</span>
								<label>Quantity:</label>
								<input type="text" value="3" />

								<!-- 
								Formular ce trimite doar id-ul de produs la pagina cos.php folosind POST
								-->
								<form action="cos" method="post">
									<input type="hidden" name="id_produs" value="<?=$produs['id']?>" />
								
									<i class="fa fa-shopping-cart"></i>
									<input type="submit" class="btn btn-default cart" style="width:auto;height:auto;"
									value="Adauga in cos" />				
								</form>

								
							</span>
							<p><b>Availability:</b> In Stock</p>
							<p><b>Condition:</b> New</p>
							<p><b>Brand:</b> E-SHOPPER</p>
							<a href=""><img src="public/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
						</div><!--/product-information-->
					</div>
				</div><!--/product-details-->
				
				<?php $this->view('produs/categorii'); ?>
				<?php $this->view('produs/recomandari'); ?>
			</div>
		</div>
	</div>
</section>
