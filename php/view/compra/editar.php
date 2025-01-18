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
	<title>Editar Compra</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Editar Compra</h1>
	<form action="../../index.php?classe=compra&metodo=update" method="POST">
		<input type="hidden" name="id" value="<?= $compra->id ?>">

		<label for="cliente_id">Cliente (ID):</label>
		<input value="<?= $compra->cliente_id ?>" type="number" id="cliente_id" name="cliente_id" value="101" required><br><br>

		<label for="produto_id">Produto (ID):</label>
		<input value="<?= $compra->produto_id ?>" type="number" id="produto_id" name="produto_id" value="2" required><br><br>

		<label for="data">Data:</label>
		<input value="<?= $compra->data ?>" type="date" id="data" name="data" value="2025-01-18" required><br><br>

		<label for="horario">Horário:</label>
		<input value="<?= $compra->horario ?>" type="time" id="horario" name="horario" value="10:30" required><br><br>

		<label for="qtd">Quantidade:</label>
		<input value="<?= $compra->qtd ?>" type="number" id="qtd" name="qtd" value="3" required><br><br>

		<button type="submit">Salvar Alterações</button>
	</form>
</body>

</html>