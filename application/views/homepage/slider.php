<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					<?php 
						$contor = 0;
						foreach($slider as $oneslide) { 
						?>
						<li data-target="#slider-carousel" data-slide-to="<?=$contor?>" class="<?php if($contor==0) echo 'active';?>"></li>
						<?php 
							$contor++;
						} ?>
					</ol>
					
					<div class="carousel-inner">
						<?php 
						$contor = 0;
						foreach($slider as $oneslide) { 
							$contor++;
						?>
						<div class="item <?php if($contor == 1) echo 'active'; ?>">
							<div class="col-sm-6">
								<h1><?=$oneslide['nume']?></h1>
								<h2>Free E-Commerce Template</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="public/images/shop/slider<?=$oneslide['id_imagine']?>.jpg" class="girl img-responsive" alt="" />
								<img src="public/images/home/pricing.png"  class="pricing" alt="" />
							</div>
						</div>	
						<?php } ?>
					</div>
					
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				
			</div>
		</div>
	</div>
</section><!--/slider-->
