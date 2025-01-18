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
	<form action="../../ClienteController/update" method="POST">
		<input type="hidden" name="id" value="1">

		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" value="João da Silva" required><br>

		<label for="cpf">CPF:</label>
		<input type="text" name="cpf" id="cpf" value="111.222.333-44" required><br>

		<label for="dt_nasc">Data de Nascimento:</label>
		<input type="date" name="dt_nasc" id="dt_nasc" value="1980-01-01" required><br>

		<label for="whatsapp">WhatsApp:</label>
		<input type="text" name="whatsapp" id="whatsapp" value="(11) 98765-4321" required><br>

		<label for="logradouro">Logradouro:</label>
		<input type="text" name="logradouro" id="logradouro" value="Rua A" required><br>

		<label for="num">Número:</label>
		<input type="text" name="num" id="num" value="123" required><br>

		<label for="bairro">Bairro:</label>
		<input type="text" name="bairro" id="bairro" value="Centro" required><br>

		<button type="submit">Atualizar</button>
	</form>
</body>

</html>