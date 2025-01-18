<?php
session_start();

$compra = $_SESSION['compra'];

if (!$compra) {
	die("Erro: Compra não encontrado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detalhes da Compra</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Detalhes da Compra</h1>
	<table border="1">
		<tr>
			<th>ID</th>
			<td><?= $compra->id ?></td>
		</tr>
		<tr>
			<th>Cliente (ID)</th>
			<td><?= $compra->cliente_id ?></td>
		</tr>
		<tr>
			<th>Produto (ID)</th>
			<td><?= $compra->produto_id ?></td>
		</tr>
		<tr>
			<th>Data</th>
			<td><?= $compra->data ?></td>
		</tr>
		<tr>
			<th>Horário</th>
			<td><?= $compra->horario ?></td>
		</tr>
		<tr>
			<th>Quantidade</th>
			<td><?= $compra->qtd ?></td>
		</tr>
	</table>
</body>

</html>