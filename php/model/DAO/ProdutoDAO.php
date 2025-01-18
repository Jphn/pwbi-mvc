<?php

include_once __DIR__ . '/../../core/Conexao.php';

class ProdutoDAO
{
	private $conexao;

	public function __construct()
	{
		$this->conexao = Conexao::getConexao();
	}

	public function inserir($produto)
	{
		$sql = "INSERT INTO produtos (nome, valor, marca, categoria) VALUES (:nome, :valor, :marca, :categoria)";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':nome', $produto->nome);
		$stmt->bindParam(':valor', $produto->valor);
		$stmt->bindParam(':marca', $produto->marca);
		$stmt->bindParam(':categoria', $produto->categoria);
		return $stmt->execute();
	}

	public function mostrar_tudo()
	{
		$sql = "SELECT * FROM produtos";
		return $this->conexao->query($sql)->fetchAll(PDO::FETCH_OBJ);
	}

	public function buscar_por_id($id)
	{
		$sql = "SELECT * FROM produtos WHERE id = :id";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_OBJ);
	}

	public function atualizar($produto)
	{
		$sql = "UPDATE produtos SET nome = :nome, valor = :valor, marca = :marca, categoria = :categoria WHERE id = :id";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':id', $produto->id);
		$stmt->bindParam(':nome', $produto->nome);
		$stmt->bindParam(':valor', $produto->valor);
		$stmt->bindParam(':marca', $produto->marca);
		$stmt->bindParam(':categoria', $produto->categoria);
		return $stmt->execute();
	}

	public function excluir($id)
	{
		$sql = "DELETE FROM produtos WHERE id = :id";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}
}
