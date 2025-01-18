<?php
session_start();

$produto = $_SESSION['produto'];

if (!$produto) {
	die("Erro: Produto não encontrado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detalhes do Produto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Detalhes do Produto</h1>
	<table border="1">
		<tr>
			<th>ID</th>
			<td><?= $produto->id ?></td>
		</tr>
		<tr>
			<th>Nome</th>
			<td><?= $produto->nome ?></td>
		</tr>
		<tr>
			<th>Valor</th>
			<td><?= $produto->valor ?></td>
		</tr>
		<tr>
			<th>Marca</th>
			<td><?= $produto->marca ?></td>
		</tr>
		<tr>
			<th>Categoria</th>
			<td><?= $produto->categoria ?></td>
		</tr>
	</table>
</body>

</html>