<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Serviços</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Lista de Serviços</h1>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Valor</th>
				<th>Descrição</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if (isset($_SESSION['servicos']) && is_array($_SESSION['servicos'])) {
				foreach ($_SESSION['servicos'] as $servico) {
					echo "<tr>";
					echo "<td>{$servico->id}</td>";
					echo "<td>{$servico->nome}</td>";
					echo "<td>{$servico->valor}</td>";
					echo "<td>{$servico->descricao}</td>";
					echo "<td>
						<a href='../../index.php?classe=Servico&metodo=show&id={$servico->id}' class='btn btn-primary btn-sm'>Mostrar</a>
						<a href='../../index.php?classe=Servico&metodo=edit&id={$servico->id}' class='btn btn-warning btn-sm'>Editar</a>
						<form action='../../index.php?classe=Servico&metodo=delete&id={$servico->id}' method='POST' style='display:inline;'>
							<input type='hidden' name='id' value='{$servico->id}'>
							<button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza que deseja excluir este serviço?\");'>Excluir</button>
						</form>
					</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='4'>Nenhum serviço encontrado.</td></tr>";
			}
			?>
		</tbody>
	</table>
</body>

</html>