<?php require_once ROOT . '/views/layouts/header.php'; ?>

<div class="colorlib-product">
			<div class="container">

								<h1>Кабинет пользователя</h1>

								<h3>Привет, <?=$user['name'];?></h3>
								<ul>
									<li><a href="/cabinet/edit">Редактировать данные</a></li>
									<li><a href="/cabinet/history">Список покупок</a></li>
								</ul>

			</div>
		</div>















<?php require_once ROOT . '/views/layouts/footer.php'; ?>