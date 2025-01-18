<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página Inicial</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<h1>Bem-vindo ao Sistema de Gestão</h1>

	<h2>Menu</h2>

	<ul>
		<li><a href="./index.php?classe=Cliente&metodo=index">Clientes</a>
			<ul>
				<li><a href="./index.php?classe=Cliente&metodo=create">Inserir Cliente</a></li>
				<li><a href="./index.php?classe=Cliente&metodo=index">Ver Todos os Clientes</a>
				</li>
				<li><a href="./index.php?classe=Cliente&metodo=show&id=1">Mostrar Cliente 1</a>
				</li>
				<li><a href="./index.php?classe=Cliente&metodo=edit&id=1">Editar Cliente 1</a>
				</li>
			</ul>
		</li>

		<li><a href="./index.php?classe=Servico&metodo=index">Serviços</a>
			<ul>
				<li><a href="./index.php?classe=Servico&metodo=create">Inserir Serviço</a></li>
				<li><a href="./index.php?classe=Servico&metodo=index">Ver Todos os Serviços</a>
				</li>
				<li><a href="./index.php?classe=Servico&metodo=show&id=1">Mostrar Serviço 1</a>
				</li>
				<li><a href="./index.php?classe=Servico&metodo=edit&id=1">Editar Serviço 1</a>
				</li>
			</ul>
		</li>

		<li><a href="./index.php?classe=Produto&metodo=index">Produtos</a>
			<ul>
				<li><a href="./index.php?classe=Produto&metodo=create">Inserir Produto</a></li>
				<li><a href="./index.php?classe=Produto&metodo=index">Ver Todos os Produtos</a>
				</li>
				<li><a href="./index.php?classe=Produto&metodo=show&id=1">Mostrar Produto 1</a>
				</li>
				<li><a href="./index.php?classe=Produto&metodo=edit&id=1">Editar Produto 1</a>
				</li>
			</ul>
		</li>

		<li><a href="./index.php?classe=Agendamento&metodo=index">Agendamentos</a>
			<ul>
				<li><a href="./index.php?classe=Agendamento&metodo=create">Inserir
						Agendamento</a></li>
				<li><a href="./index.php?classe=Agendamento&metodo=index">Ver Todos os
						Agendamentos</a></li>
				<li><a href="./index.php?classe=Agendamento&metodo=show&id=1">Mostrar
						Agendamento 1</a></li>
				<li><a href="./index.php?classe=Agendamento&metodo=edit&id=1">Editar
						Agendamento 1</a></li>
			</ul>
		</li>

		<li><a href="./index.php?classe=Compra&metodo=index">Compras</a>
			<ul>
				<li><a href="./index.php?classe=Compra&metodo=create">Inserir
						Compra</a></li>
				<li><a href="./index.php?classe=Compra&metodo=index">Ver Todos os
						Compras</a></li>
				<li><a href="./index.php?classe=Compra&metodo=show&id=1">Mostrar
						Compra 1</a></li>
				<li><a href="./index.php?classe=Compra&metodo=edit&id=1">Editar
						Compra 1</a></li>
			</ul>
		</li>
	</ul>
</body>

</html>