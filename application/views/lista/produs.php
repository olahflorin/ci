<div class="col-sm-4">
	<div class="product-image-wrapper">
		<div class="single-products">
			<a href="<?=base_url();?>index.php/produs/<?=$produs['id'] ?>">
				<div class="productinfo text-center">
					<img src="<?=base_url();?>public/images/shop/product<?=$produs['id_imagine'] ?>.jpg" alt="" />
					<h2><?=$produs['pret'] ?> Lei</h2>
					<p><?=$produs['nume'] ?></p>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
			</a>
		</div>
	</div>
</div>