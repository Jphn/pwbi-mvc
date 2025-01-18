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
	<title>Detalhes do Cliente</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Detalhes do Cliente</h1>
	<table border="1">
		<tr>
			<th>ID:</th>
			<td><?= $cliente->id ?></td>
		</tr>
		<tr>
			<th>Nome:</th>
			<td><?= $cliente->nome ?></td>
		</tr>
		<tr>
			<th>CPF:</th>
			<td><?= $cliente->cpf ?></td>
		</tr>
		<tr>
			<th>Data de Nascimento:</th>
			<td><?= $cliente->dt_nasc ?></td>
		</tr>
		<tr>
			<th>WhatsApp:</th>
			<td><?= $cliente->whatsapp ?></td>
		</tr>
		<tr>
			<th>Logradouro:</th>
			<td><?= $cliente->logradouro ?></td>
		</tr>
		<tr>
			<th>Número:</th>
			<td><?= $cliente->num ?></td>
		</tr>
		<tr>
			<th>Bairro:</th>
			<td><?= $cliente->bairro ?></td>
		</tr>
	</table>
</body>

</html>