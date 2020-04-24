<?php require_once ROOT . '/views/layouts/header.php'; ?>

<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Главная</a></span> / <span>Платежные резвизиты</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-sm-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Корзина покупок</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Платежные Реквизиты</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Завершения</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8">
						<?php if($result){
							header("Location: /ordercomplete");
						} ?>
						<form method="post" class="colorlib-form">
							<h2>Платежные Реквизиты</h2>
		              	<div class="row">
			               <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="country">Выбирите страну</label>
			                     <div class="form-field">
			                     	<i class="icon icon-arrow-down3"></i>
			                        <select name="people" id="people" class="form-control">
				                      	<option value="#">Select country</option>
				                        <option name="Russia" value="#">Россия</option>
			                        </select>
			                     </div>
			                  </div>
			               </div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="fname">Имя</label>
										<input type="text" name="fname" id="fname" class="form-control" placeholder="Ваше имя">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="lname">Фамилия</label>
										<input type="text" name="lname" id="lname" class="form-control" placeholder="Ваше фамилия">
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<label for="companyname">Названия компании</label>
			                    	<input type="text" name="companyname" id="companyname" class="form-control" placeholder="Имя компании">
			                  </div>
			               </div>

			               <div class="col-md-12">
									<div class="form-group">
										<label for="faddress">Адрес</label>
			                    	<input type="text" name="address" id="address" class="form-control" placeholder="Введите ваш адрес">
			                  </div>
			                  <div class="form-group">
			                    	<input type="text" name="address2" id="address2" class="form-control" placeholder="Второй адрес">
			                  </div>
			               </div>

			               <div class="col-md-12">
									<div class="form-group">
										<label for="companyname">Город</label>
			                    	<input type="text" name="city" id="towncity" class="form-control" placeholder="Город">
			                  </div>
			               </div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="stateprovince">Край/Область</label>
										<input type="text" name="formcontrol" id="fname" class="form-control" placeholder="Кра/Область">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="lname">Почтовый индекс</label>
										<input type="text" name="zippostalcode" id="zippostalcode" class="form-control" placeholder="индекс">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Электроный адрес</label>
										<input type="text" name="email" id="email" class="form-control" placeholder="Введите ваш e-mail">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="Phone">Номер телефона</label>
										<input type="text" name="phone" id="zippostalcode" class="form-control" placeholder="">
									</div>
								</div>

		               </div>
		            </form>
					</div>

					<div class="col-lg-4">
						<div class="row">
							<div class="col-md-12">
								<div class="cart-detail">
									<h2>Всего в корзине</h2>
									<ul>
										<li>
											<span>Subtotal</span> <span>$100.00</span>
											<ul>
												<li><span>1 x Product Name</span> <span>$99.00</span></li>
												<li><span>1 x Product Name</span> <span>$78.00</span></li>
											</ul>
										</li>
										<li><span>Shipping</span> <span>$0.00</span></li>
										<li><span>Order Total</span> <span>$180.00</span></li>
									</ul>
								</div>
						   </div>

						   <div class="w-100"></div>

						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<p><a href="/ordercomplete" class="btn btn-primary">Разместить заказ</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<?php require_once ROOT . '/views/layouts/footer.php'; ?>