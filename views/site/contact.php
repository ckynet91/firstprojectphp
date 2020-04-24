<?php require_once ROOT . '/views/layouts/header.php'; ?>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="/">Главная</a></span> / <span>Контакт</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>Контактная информация</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">yoursite.com</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="contact-wrap">
							<?php if($result){?>
								<p>Сообщение отправлено!!</p>
							<?php }else{?>
								<?php if(isset($errors) && is_array($errors)){?>
									<ul>
										<?php foreach ($errors as $error) { ?>
											<li> - <?=$error;?></li>
										<?php }?>
									</ul>
								<?php } ?>
								<h3>Связаться с нами</h3>
							<form action="#" class="contact-form" method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="fname">Ваше имя</label>
											<input type="text" id="fname" name="fname" class="form-control" placeholder="Имя">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="lname">Ваше фамилия</label>
											<input type="text" id="lname" name="lname" class="form-control" placeholder="фамилия">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="email">Ваш Email</label>
											<input type="text" id="email" name="email" class="form-control" placeholder="email адресс">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Тема</label>
											<input type="text" id="subject" name="subject" class="form-control" placeholder="Ваша тема этого сообщения">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="message">Сообщение</label>
											<textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Тут можете задать ваши вопросы"></textarea>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" name="submit" value="Отправить сообщения" class="btn btn-primary">
										</div>
									</div>
								</div>
							</form>
						<?php }?>
						</div>
					</div>
					<div class="col-md-6">
						<div id="map" class="colorlib-map"></div>
					</div>
				</div>
			</div>
		</div>



		<?php require_once ROOT . '/views/layouts/footer.php'; ?>