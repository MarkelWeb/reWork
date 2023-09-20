<?php
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'studybase');
		$result = $mysqli->query("ISELECT * FROM articles");

		include 'php/header.php'; ?>
		while(($row = $result->fetch_assoc()) != null):
		<div class="container">
			<? while(($row = $result->fetch_assoc()) != null): ?>
				<h3><?= $row['title']; ?></h3>
				<p><?= $row['content']; ?></p>
				<p><?= $row['author']; ?></p>
				<hr class='ny-3'>
			<? endwhile ?>
		</div>
		
		<?php include 'php/footer.php'; ?>