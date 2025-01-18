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
	<title>Editar Agendamento</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Editar Agendamento</h1>
	<form action="../../index.php?classe=agendamento&metodo=update" method="POST">
		<input type="hidden" name="id" value="<?= $agendamento->id ?>">

		<label for="cliente_id">Cliente (ID):</label>
		<input value="<?= $agendamento->cliente_id ?>" type="number" id="cliente_id" name="cliente_id" required><br><br>

		<label for="servico_id">Serviço (ID):</label>
		<input value="<?= $agendamento->servico_id ?>" type="number" id="servico_id" name="servico_id" required><br><br>

		<label for="data">Data:</label>
		<input value="<?= $agendamento->data ?>" type="date" id="data" name="data" required><br><br>

		<label for="horario">Horário:</label>
		<input value="<?= $agendamento->horario ?>" type="time" id="horario" name="horario" required><br><br>

		<label for="duracao">Duração (minutos):</label>
		<input value="<?= $agendamento->duracao ?>" type="number" id="duracao" name="duracao" required><br><br>

		<label for="estado">Status:</label>
		<input type="checkbox" id="estado" name="estado"><br><br>

		<button type="submit">Salvar Alterações</button>
	</form>
</body>

</html>