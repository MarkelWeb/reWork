<?php include 'php/header.php'; ?>
	<div class="container my-5">
		<h1 class="text-center">Регистрация</h1>
		<div class="col-sm-5 mx-auto my-3">
			<form action="php/handlerReg.php" method="post">
				<div class="mb-3">
					<input type="text" name="name" class="form-control" placeholder="Имя">
				</div>
				<div class="mb-3">
					<input type="text" name="lastname" class="form-control" placeholder="Фамилия">
				</div>
				<div class="mb-3">
					<input type="email" name="email" class="form-control" placeholder="Логин">
				</div>
				<div class="mb-3">
					<input type="password" name="pass" class="form-control" placeholder="Пароль">
				</div>
				<div class="mb-3">
					<input type="submit" class="form-control btn btn-primary" value="Зарегестрироваться">
				</div>
			</form>
		</div>
	</div>
	<?php include 'php/footer.php'; ?>