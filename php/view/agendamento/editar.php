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
	<form action="/agendamentos/atualizar/1" method="POST">
		<label for="cliente_id">Cliente (ID):</label>
		<input type="number" id="cliente_id" name="cliente_id" value="101" required><br><br>

		<label for="servico_id">Serviço (ID):</label>
		<input type="number" id="servico_id" name="servico_id" value="5" required><br><br>

		<label for="data">Data:</label>
		<input type="date" id="data" name="data" value="2025-01-20" required><br><br>

		<label for="horario">Horário:</label>
		<input type="time" id="horario" name="horario" value="14:00" required><br><br>

		<label for="duracao">Duração (minutos):</label>
		<input type="number" id="duracao" name="duracao" value="60" required><br><br>

		<label for="status">Status:</label>
		<select id="status" name="status" required>
			<option value="pendente" selected>Pendente</option>
			<option value="concluido">Concluído</option>
			<option value="cancelado">Cancelado</option>
		</select><br><br>

		<button type="submit">Salvar Alterações</button>
	</form>
</body>

</html>