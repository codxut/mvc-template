<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $data['page_tag'] ?></title>
</head>
<body>
	<h1><?= $data['page_title'] ?></h1>
	<main id="<?= $data['page_id'] ?>">
		<p><?= $data['page_content'] ?></p>
	</main>
	<!-- métodos obtenidos del archivos Helpers -->
	<?= baseUrl() ?>
	<?php formatArr($data) ?>
	<?= strClean("SELECT * FROM Usuario1").'<br>' ?>
	<?= passwordGenerator(10).'<br>' ?>
	<?= tokenGenerator().'<br>' ?>
	<?= formatMoney(100.58) ?>
</body>
</html>