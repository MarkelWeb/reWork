	<?php include 'php/header.php'; ?>
		<div class="container">
			<p><strong>Имя: </strong><span><?= $_SESSION['name']; ?></span></p>
			<p><strong>Фамилия: </strong><span><?= $_SESSION['lastname']; ?></span></p>
		</div>
	<?php include 'php/footer.php'; ?>
