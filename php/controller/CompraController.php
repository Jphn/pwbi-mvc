<?php

include __DIR__ . '/../model/Compra.php';
include __DIR__ . '/../model/DAO/CompraDAO.php';

class CompraController
{
	private $compra;
	private $compra_dao;

	public function __construct()
	{
		$this->compra = new Compra();
		$this->compra_dao = new CompraDAO();
	}

	public function index()
	{
		$compras = $this->compra_dao->mostrar_tudo();
		session_start();
		$_SESSION['compras'] = $compras;
		header('Location: ./view/compra/mostrar_tudo.php');
	}

	public function create()
	{
		header('Location: view/compra/novo.php');
	}

	public function store()
	{
		$this->compra->cliente_id = $_POST['cliente_id'];
		$this->compra->produto_id = $_POST['produto_id'];
		$this->compra->data = $_POST['data'];
		$this->compra->horario = $_POST['horario'];
		$this->compra->qtd = $_POST['qtd'];

		$resp = $this->compra_dao->inserir($this->compra);
		if ($resp) {
			echo 'Compra cadastrada com sucesso!';
		}
	}

	public function edit($id)
	{
		session_start();
		$_SESSION['compra'] = $this->compra_dao->buscar_por_id($id);
		header('Location: view/compra/editar.php');
	}

	public function update()
	{
		$this->compra->id = $_POST['id'];
		$this->compra->cliente_id = $_POST['cliente_id'];
		$this->compra->produto_id = $_POST['produto_id'];
		$this->compra->data = $_POST['data'];
		$this->compra->horario = $_POST['horario'];
		$this->compra->qtd = $_POST['qtd'];

		$resp = $this->compra_dao->atualizar($this->compra);
		if ($resp) {
			echo 'Compra atualizada com sucesso!';
		}
	}

	public function delete($id)
	{
		$resp = $this->compra_dao->excluir($id);
		if ($resp) {
			echo 'Compra excluída com sucesso!';
		}
	}

	public function show($id)
	{
		session_start();
		$_SESSION['compra'] = $this->compra_dao->buscar_por_id($id);
		header('Location: view/compra/mostrar_registro.php');
	}

}
