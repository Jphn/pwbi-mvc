<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nova Compra</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Nova Compra</h1>
	<form action="../../index.php?classe=compra&metodo=store" method="POST">
		<label for="cliente_id">Cliente (ID):</label>
		<input type="number" id="cliente_id" name="cliente_id" required><br><br>

		<label for="produto_id">Produto (ID):</label>
		<input type="number" id="produto_id" name="produto_id" required><br><br>

		<label for="data">Data:</label>
		<input type="date" id="data" name="data" required><br><br>

		<label for="horario">Horário:</label>
		<input type="time" id="horario" name="horario" required><br><br>

		<label for="qtd">Quantidade:</label>
		<input type="number" id="qtd" name="qtd" required><br><br>

		<button type="submit">Salvar</button>
	</form>
</body>

</html>