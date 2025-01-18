<?php

include __DIR__ . '/../model/Servico.php';
include __DIR__ . '/../model/DAO/ServicoDAO.php';

class ServicoController
{
	private $servico;
	private $servico_dao;

	public function __construct()
	{
		$this->servico = new Servico();
		$this->servico_dao = new ServicoDAO();
	}

	public function index()
	{
		$servicos = $this->servico_dao->mostrar_tudo();
		session_start();
		$_SESSION['servicos'] = $servicos;
		header('Location: ./view/servico/mostrar_tudo.php');
	}

	public function create()
	{
		header('Location: view/servico/novo.php');
	}

	public function store()
	{
		$this->servico->nome = $_POST['nome'];
		$this->servico->valor = $_POST['valor'];
		$this->servico->descricao = $_POST['descricao'];

		$resp = $this->servico_dao->inserir($this->servico);
		if ($resp) {
			echo 'Serviço cadastrado com sucesso!';
		}
	}

	public function edit($id)
	{
		session_start();
		$_SESSION['servico'] = $this->servico_dao->buscar_por_id($id);
		header('Location: view/servico/editar.php');
	}

	public function update()
	{
		$this->servico->id = $_POST['id'];
		$this->servico->nome = $_POST['nome'];
		$this->servico->valor = $_POST['valor'];
		$this->servico->descricao = $_POST['descricao'];

		$resp = $this->servico_dao->atualizar($this->servico);
		if ($resp) {
			echo 'Serviço atualizado com sucesso!';
		}
	}

	public function delete($id)
	{
		$resp = $this->servico_dao->excluir($id);
		if ($resp) {
			echo 'Serviço excluído com sucesso!';
		}
	}

	public function show($id)
	{
		session_start();
		$_SESSION['servico'] = $this->servico_dao->buscar_por_id($id);
		header('Location: view/servico/mostrar_registro.php');
	}

}
