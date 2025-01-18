<?php

include __DIR__ . '/../model/Agendamento.php';
include __DIR__ . '/../model/DAO/AgendamentoDAO.php';

class AgendamentoController
{
	private $agendamento;
	private $agendamento_dao;

	public function __construct()
	{
		$this->agendamento = new Agendamento();
		$this->agendamento_dao = new AgendamentoDAO();
	}

	public function index()
	{
		$agendamentos = $this->agendamento_dao->mostrar_tudo();
		session_start();
		$_SESSION['agendamentos'] = $agendamentos;
		header('Location: ./view/agendamento/mostrar_tudo.php');
	}

	public function create()
	{
		header('Location: view/agendamento/novo.php');
	}

	public function store()
	{
		$this->agendamento->cliente_id = $_POST['cliente_id'];
		$this->agendamento->servico_id = $_POST['servico_id'];
		$this->agendamento->data = $_POST['data'];
		$this->agendamento->horario = $_POST['horario'];
		$this->agendamento->duracao = $_POST['duracao'];
		$this->agendamento->estado = !isset($_POST['estado']) ? 0 : 1;

		$resp = $this->agendamento_dao->inserir($this->agendamento);
		if ($resp) {
			echo 'Agendamento cadastrado com sucesso!';
		}
	}

	public function edit($id)
	{
		session_start();
		$_SESSION['agendamento'] = $this->agendamento_dao->buscar_por_id($id);
		header('Location: view/agendamento/editar.php');
	}

	public function update()
	{
		$this->agendamento->id = $_POST['id'];
		$this->agendamento->cliente_id = $_POST['cliente_id'];
		$this->agendamento->servico_id = $_POST['servico_id'];
		$this->agendamento->data = $_POST['data'];
		$this->agendamento->horario = $_POST['horario'];
		$this->agendamento->duracao = $_POST['duracao'];
		$this->agendamento->estado = !isset($_POST['estado']) ? 0 : 1;

		$resp = $this->agendamento_dao->atualizar($this->agendamento);
		if ($resp) {
			echo 'Agendamento atualizado com sucesso!';
		}
	}

	public function delete($id)
	{
		$resp = $this->agendamento_dao->excluir($id);
		if ($resp) {
			echo 'Agendamento excluído com sucesso!';
		}
	}

	public function show($id)
	{
		session_start();
		$_SESSION['agendamento'] = $this->agendamento_dao->buscar_por_id($id);
		header('Location: view/agendamento/mostrar_registro.php');
	}
}
