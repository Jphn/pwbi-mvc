<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Clientes</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Lista de Clientes</h1>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>CPF</th>
				<th>WhatsApp</th>
				<th>Bairro</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if (isset($_SESSION['clientes']) && is_array($_SESSION['clientes'])) {
				foreach ($_SESSION['clientes'] as $cliente) {
					echo "<tr>";
					echo "<td>{$cliente->id}</td>";
					echo "<td>{$cliente->nome}</td>";
					echo "<td>{$cliente->cpf}</td>";
					echo "<td>{$cliente->whatsapp}</td>";
					echo "<td>{$cliente->bairro}</td>";
					echo "<td>
					<a href='../../index.php?classe=Cliente&metodo=show&id={$cliente->id}' class='btn btn-primary btn-sm'>Mostrar</a>
					<a href='../../index.php?classe=Cliente&metodo=edit&id={$cliente->id}' class='btn btn-warning btn-sm'>Editar</a>
					<form action='../../index.php?classe=Cliente&metodo=delete&id={$cliente->id}' method='POST' style='display:inline;'>
						<input type='hidden' name='id' value='{$cliente->id}'>
						<button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza que deseja excluir este serviço?\");'>Excluir</button>
					</form>
				</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='5'>Nenhum cliente encontrado.</td></tr>";
			}
			?>
		</tbody>
	</table>
</body>

</html>