<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Serviço</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Editar Serviço</h1>
	<form action="/servicos/atualizar/1" method="POST">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" value="Corte de Cabelo" required><br><br>

		<label for="valor">Valor:</label>
		<input type="number" id="valor" name="valor" value="30.00" required><br><br>

		<label for="descricao">Descrição:</label>
		<textarea id="descricao" name="descricao" required>Corte masculino básico</textarea><br><br>

		<button type="submit">Salvar Alterações</button>
	</form>
</body>

</html>