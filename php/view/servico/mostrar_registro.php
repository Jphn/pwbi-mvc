<?php
session_start();

$servico = $_SESSION['servico'];

if (!$servico) {
	die("Erro: Serviço não encontrado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detalhes do Serviço</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Detalhes do Serviço</h1>
	<table border="1">
		<tr>
			<th>ID</th>
			<td><?= $servico->id ?></td>
		</tr>
		<tr>
			<th>Nome</th>
			<td><?= $servico->nome ?></td>
		</tr>
		<tr>
			<th>Valor</th>
			<td><?= $servico->valor ?></td>
		</tr>
		<tr>
			<th>Descrição</th>
			<td><?= $servico->descricao ?></td>
		</tr>
	</table>
</body>

</html>