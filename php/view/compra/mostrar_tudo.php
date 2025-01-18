<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Compras</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Lista de Compras</h1>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Cliente (ID)</th>
				<th>Produto (ID)</th>
				<th>Data</th>
				<th>Horário</th>
				<th>Quantidade</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if (isset($_SESSION['compras']) && is_array($_SESSION['compras'])) {
				foreach ($_SESSION['compras'] as $compra) {
					echo "<tr>";
					echo "<td>{$compra->id}</td>";
					echo "<td>{$compra->cliente_id}</td>";
					echo "<td>{$compra->produto_id}</td>";
					echo "<td>{$compra->data}</td>";
					echo "<td>{$compra->horario}</td>";
					echo "<td>{$compra->qtd}</td>";
					echo "<td>
						<a href='../../index.php?classe=compra&metodo=show&id={$compra->id}' class='btn btn-primary btn-sm'>Mostrar</a>
						<a href='../../index.php?classe=compra&metodo=edit&id={$compra->id}' class='btn btn-warning btn-sm'>Editar</a>
						<form action='../../index.php?classe=compra&metodo=delete&id={$compra->id}' method='POST' style='display:inline;'>
							<input type='hidden' name='id' value='{$compra->id}'>
							<button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza que deseja excluir este serviço?\");'>Excluir</button>
						</form>
					</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='6'>Nenhuma compra encontrada.</td></tr>";
			}
			?>
		</tbody>
	</table>
</body>

</html>