<?php require_once ROOT . '/views/layouts/header.php'; ?>
<style>
.form-width {max-width: 25rem;}
.has-float-label {
 position: relative; }
 .has-float-label label {
 position: absolute;
 left: 0;
 top: 0;
 cursor: text;
 font-size: 75%;
 opacity: 1;
 -webkit-transition: all .2s;
 transition: all .2s;
 top: -.5em;
 left: 0.75rem;
 z-index: 3;
 line-height: 1;
 padding: 0 1px; }
 .has-float-label label::after {
 content: " ";
 display: block;
 position: absolute;
 background: white;
 height: 2px;
 top: 50%;
 left: -.2em;
 right: -.2em;
 z-index: -1; }
 .has-float-label .form-control::-webkit-input-placeholder {
 opacity: 1;
 -webkit-transition: all .2s;
 transition: all .2s; }
 .has-float-label .form-control:placeholder-shown:not(:focus)::-webkit-input-placeholder {
 opacity: 0; }
 .has-float-label .form-control:placeholder-shown:not(:focus) + label {
 font-size: 150%;
 opacity: .5;
 top: .3em; }

.input-group .has-float-label {
 display: table-cell; }
 .input-group .has-float-label .form-control {
 border-radius: 0.25rem; }
 .input-group .has-float-label:not(:last-child) .form-control {
 border-bottom-right-radius: 0;
 border-top-right-radius: 0; }
 .input-group .has-float-label:not(:first-child) .form-control {
 border-bottom-left-radius: 0;
 border-top-left-radius: 0;
 margin-left: -1px; }
</style>
<div class="colorlib-product">
			<div class="container">
				<?php if ($result){?>
					<p>Данные отредактированы!</p>
				<?php }else{?>
	<?php if(isset($errors) && is_array($errors)){?>
		<ul>
		<?php foreach ($errors as $error) { ?>
			<li> - <?=$error;?></li>
		<?php }?>
		</ul>
	<?php } ?>
								<div class="p-x-1 p-y-3">
 <form class="card card-block m-x-auto bg-faded form-width" action="#" method="post">
 <legend class="m-b-1 text-xs-center">Редактирования данных</legend>
 <div class="form-group input-group">
 <span class="has-float-label">
 <input class="form-control" id="first" type="text" placeholder="" name="name" value="<?=$name;?>" />
 <label for="first">Имя</label>
 </span>
 </div>
 <div class="form-group has-float-label">
 <input class="form-control" id="password" type="password" placeholder="" name="password" value="<?=$password;?>" />
 <label for="password">Пароль</label>
 </div>


 <div class="text-xs-center">
 <input class="btn btn-block btn-primary" type="submit" name="submit">
 </div>
 </form>
</div>
<?php }?>
			</div>
		</div>















<?php require_once ROOT . '/views/layouts/footer.php'; ?>