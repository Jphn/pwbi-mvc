<?php

include __DIR__ . '/../model/Produto.php';
include __DIR__ . '/../model/DAO/ProdutoDAO.php';

class ProdutoController
{
	private $produto;
	private $produto_dao;

	public function __construct()
	{
		$this->produto = new Produto();
		$this->produto_dao = new ProdutoDAO();
	}

	public function index()
	{
		$produtos = $this->produto_dao->mostrar_tudo();
		session_start();
		$_SESSION['produtos'] = $produtos;
		header('Location: ./view/produto/mostrar_tudo.php');
	}

	public function create()
	{
		header('Location: view/produto/novo.php');
	}

	public function store()
	{
		$this->produto->nome = $_POST['nome'];
		$this->produto->valor = $_POST['valor'];
		$this->produto->marca = $_POST['marca'];
		$this->produto->categoria = $_POST['categoria'];

		$resp = $this->produto_dao->inserir($this->produto);
		if ($resp) {
			echo 'Produto cadastrado com sucesso!';
		}
	}

	public function edit($id)
	{
		session_start();
		$_SESSION['produto'] = $this->produto_dao->buscar_por_id($id);
		header('Location: view/produto/editar.php');
	}

	public function update()
	{
		$this->produto->id = $_POST['id'];
		$this->produto->nome = $_POST['nome'];
		$this->produto->valor = $_POST['valor'];
		$this->produto->marca = $_POST['marca'];
		$this->produto->categoria = $_POST['categoria'];

		$resp = $this->produto_dao->atualizar($this->produto);
		if ($resp) {
			echo 'Produto atualizado com sucesso!';
		}
	}

	public function delete($id)
	{
		$resp = $this->produto_dao->excluir($id);
		if ($resp) {
			echo 'Produto excluído com sucesso!';
		}
	}

	public function show($id)
	{
		session_start();
		$_SESSION['produto'] = $this->produto_dao->buscar_por_id($id);
		header('Location: view/produto/mostrar_registro.php');
	}

}
