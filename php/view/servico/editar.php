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
	<title>Editar Serviço</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<h1>Editar Serviço</h1>
		<form action="../../index.php?classe=Servico&metodo=update&id=<?= $servico->id ?>" method="POST">
			<input type="hidden" name="id" value="<?= $servico->id ?>">

			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" value="<?= $servico->nome ?>" required><br>

			<label for="valor">Valor:</label>
			<input type="text" name="valor" id="valor" value="<?= $servico->valor ?>" required><br>

			<label for="descricao">Descrição:</label>
			<textarea name="descricao" id="descricao" required><?= $servico->descricao ?></textarea><br>

			<button type="submit">Salvar Alterações</button>
		</form>
	</div>
</body>

</html>