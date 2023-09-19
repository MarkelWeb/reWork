<?php include 'php/header.php'; ?>
	<div class="container my-5">
		<h1 class="text-center">Авторизация</h1>
			<div class="col-sm-5 mx-auto my-3">
				<form action="php/handlerLogin.php" method="post">
						<div class="mb-3">
							<input name="email" type="text" class="form-control" placeholder="Логин">
						</div>
						<div class="mb-3">
							<input name="pass" type="password" class="form-control" placeholder="Пароль">
						</div>
						<div class="mb-3">
							<input type="submit" class="form-control btn btn-primary" value="Войти">
						</div>
					</form>
			</div>
	</div>
	<?php include 'php/footer.php'; ?>