<?php
session_start();

$agendamento = $_SESSION['agendamento'];

if (!$agendamento) {
	die("Erro: Agendamento não encontrado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detalhes do Agendamento</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Detalhes do Agendamento</h1>
	<table border="1">
		<tr>
			<th>ID</th>
			<td><?= $agendamento->id ?></td>
		</tr>
		<tr>
			<th>Cliente (ID)</th>
			<td><?= $agendamento->cliente_id ?></td>
		</tr>
		<tr>
			<th>Serviço (ID)</th>
			<td><?= $agendamento->servico_id ?></td>
		</tr>
		<tr>
			<th>Data</th>
			<td><?= $agendamento->data ?></td>
		</tr>
		<tr>
			<th>Horário</th>
			<td><?= $agendamento->horario ?></td>
		</tr>
		<tr>
			<th>Status</th>
			<td><?= $agendamento->estado ?></td>
		</tr>
	</table>
</body>

</html>