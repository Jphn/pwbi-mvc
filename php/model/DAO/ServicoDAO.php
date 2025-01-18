<?php

include_once __DIR__ . '/../../core/Conexao.php';

class ServicoDAO
{
	private $conexao;

	public function __construct()
	{
		$this->conexao = Conexao::getConexao();
	}

	public function inserir($servico)
	{
		$sql = "INSERT INTO servicos (nome, valor, descricao) VALUES (:nome, :valor, :descricao)";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':nome', $servico->nome);
		$stmt->bindParam(':valor', $servico->valor);
		$stmt->bindParam(':descricao', $servico->descricao);
		return $stmt->execute();
	}

	public function mostrar_tudo()
	{
		$sql = "SELECT * FROM servicos";
		return $this->conexao->query($sql)->fetchAll(PDO::FETCH_OBJ);
	}

	public function buscar_por_id($id)
	{
		$sql = "SELECT * FROM servicos WHERE id = :id";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_OBJ);
	}

	public function atualizar($servico)
	{
		$sql = "UPDATE servicos SET nome = :nome, valor = :valor, descricao = :descricao WHERE id = :id";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':id', $servico->id);
		$stmt->bindParam(':nome', $servico->nome);
		$stmt->bindParam(':valor', $servico->valor);
		$stmt->bindParam(':descricao', $servico->descricao);
		return $stmt->execute();
	}

	public function excluir($id)
	{
		$sql = "DELETE FROM servicos WHERE id = :id";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}
}
