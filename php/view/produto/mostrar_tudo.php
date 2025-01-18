<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Lista de Produtos</h1>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Valor</th>
				<th>Marca</th>
				<th>Categoria</th>
				<th>Ações</th>

			</tr>
		</thead>
		<tbody>
			<?php
			if (isset($_SESSION['produtos']) && is_array($_SESSION['produtos'])) {
				foreach ($_SESSION['produtos'] as $produto) {
					echo "<tr>";
					echo "<td>{$produto->id}</td>";
					echo "<td>{$produto->nome}</td>";
					echo "<td>{$produto->valor}</td>";
					echo "<td>{$produto->marca}</td>";
					echo "<td>{$produto->categoria}</td>";
					echo "<td>
						<a href='../../index.php?classe=produto&metodo=show&id={$produto->id}' class='btn btn-primary btn-sm'>Mostrar</a>
						<a href='../../index.php?classe=produto&metodo=edit&id={$produto->id}' class='btn btn-warning btn-sm'>Editar</a>
						<form action='../../index.php?classe=produto&metodo=delete&id={$produto->id}' method='POST' style='display:inline;'>
							<input type='hidden' name='id' value='{$produto->id}'>
							<button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza que deseja excluir este serviço?\");'>Excluir</button>
						</form>
					</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='5'>Nenhum produto encontrado.</td></tr>";
			}
			?>
		</tbody>
	</table>
</body>

</html>