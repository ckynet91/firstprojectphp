<?php require_once ROOT . '/views/layouts/header.php'; ?>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="/">Главная</a></span> / <span>Корзина покупок</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Корзина покупок</h3>
							</div>
							<div class="process text-center">
								<a href="/checkout">
								<p><span>02</span></p>
								<h3>Платежные Реквизиты</h3>
							</a>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Завершения</h3>
							</div>
						</div>
					</div>
				</div>
				<?php if($productsInCart) {?>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Товары</span>
							</div>
							<div class="one-eight text-center">
								<span>Цена</span>
							</div>
							<div class="one-eight text-center">
								<span>Количество</span>
							</div>
							<div class="one-eight text-center">
								<span>Сумма</span>
							</div>
							<div class="one-eight text-center px-4">
								<span>Удалить</span>
							</div>
						</div>
						<?php foreach ($products as $product) { ?>
						<div class="product-cart d-flex">
							<div class="one-forth">
								<div class="product-img" style="background-image: url(../../images/item-6.jpg);">
								</div>
								<div class="display-tc">
									<h3><?=$product['name'];?></h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">$<?=$product['price'];?></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<spn><?=$productsInCart[$product['id']];?></spn>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"><?php $total = $product['price'] * $productsInCart[$product['id']]; echo $total;?></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a href="/cart/delete/<?=$product['id'];?>" class="closed"></a>
								</div>
							</div>
						</div>
					<?php }?>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
								<div class="col-sm-8">
									<form action="#">
										<div class="row form-group">
											<div class="col-sm-9">
												<input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
											</div>
											<div class="col-sm-3">
												<input type="submit" value="Apply Coupon" class="btn btn-primary">
											</div>
										</div>
									</form>
								</div>
								<div class="col-sm-4 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span>$0.00</span></p>
											<p><span>Delivery:</span> <span>$0.00</span></p>
											<p><span>Discount:</span> <span>$0.00</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Итого:</strong></span> <span>$<?=$totalPrice;?></span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php }else{?> Корзина пустая<?php }?>
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2>Related Products</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="images/item-1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="images/item-2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Minam Meaghan</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="images/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Men's Taja Commissioner</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="images/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Russ Men's Sneakers</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<?php require_once ROOT . '/views/layouts/footer.php'; ?>