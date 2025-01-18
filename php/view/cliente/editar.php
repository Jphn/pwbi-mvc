<?php
session_start();

$cliente = $_SESSION['cliente'];

if (!$cliente) {
	die("Erro: Cliente não encontrado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Cliente</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Editar Cliente</h1>
	<form action="../../index.php?classe=cliente&metodo=update" method="POST">
		<input value="<?= $cliente->id ?>" type="hidden" name="id">

		<label for="nome">Nome:</label>
		<input value="<?= $cliente->nome ?>" type="text" name="nome" id="nome" required><br>

		<label for="cpf">CPF:</label>
		<input value="<?= $cliente->cpf ?>" type="text" name="cpf" id="cpf" required><br>

		<label for="dt_nasc">Data de Nascimento:</label>
		<input value="<?= $cliente->dt ?>" type="date" name="dt_nasc" id="dt_nasc" required><br>

		<label for="whatsapp">WhatsApp:</label>
		<input value="<?= $cliente->whatsapp ?>" type="text" name="whatsapp" id="whatsapp" required><br>

		<label for="logradouro">Logradouro:</label>
		<input value="<?= $cliente->logradouro ?>" type="text" name="logradouro" id="logradouro" required><br>

		<label for="num">Número:</label>
		<input value="<?= $cliente->num ?>" type="text" name="num" id="num" required><br>

		<label for="bairro">Bairro:</label>
		<input value="<?= $cliente->bairro ?>" type="text" name="bairro" id="bairro" required><br>

		<button type="submit">Atualizar</button>
	</form>
</body>

</html>