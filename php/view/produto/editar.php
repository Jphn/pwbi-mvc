<?php
session_start();

$produto = $_SESSION['produto'];

if (!$produto) {
	die("Erro: Produto não encontrado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Produto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Editar Produto</h1>
	<form action="../../index.php?classe=produto&metodo=update" method="POST">
		<input type="hidden" name="id" value="<?= $produto->id ?>">

		<label for="nome">Nome:</label>
		<input value="<?= $produto->nome ?>" type="text" id="nome" name="nome" required><br><br>

		<label for="valor">Valor:</label>
		<input value="<?= $produto->valor ?>" type="number" id="valor" name="valor" required><br><br>

		<label for="marca">Marca:</label>
		<input value="<?= $produto->marca ?>" type="text" id="marca" name="marca" required><br><br>

		<label for="categoria">Categoria:</label>
		<input value="<?= $produto->categoria ?>" type="text" id="categoria" name="categoria" required><br><br>

		<button type="submit">Salvar Alterações</button>
	</form>
</body>

</html>