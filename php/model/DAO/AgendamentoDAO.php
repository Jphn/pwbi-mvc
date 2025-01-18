<?php

include_once __DIR__ . '/../../core/Conexao.php';

class AgendamentoDAO
{
	private $conexao;

	public function __construct()
	{
		$this->conexao = Conexao::getConexao();
	}

	public function inserir($agendamento)
	{
		$sql = "INSERT INTO agendamentos (cliente_id, servico_id, data, horario, duracao, estado) 
                VALUES (:cliente_id, :servico_id, :data, :horario, :duracao, :estado)";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':cliente_id', $agendamento->cliente_id);
		$stmt->bindParam(':servico_id', $agendamento->servico_id);
		$stmt->bindParam(':data', $agendamento->data);
		$stmt->bindParam(':horario', $agendamento->horario);
		$stmt->bindParam(':duracao', $agendamento->duracao);
		$stmt->bindParam(':estado', $agendamento->estado);
		return $stmt->execute();
	}

	public function mostrar_tudo()
	{
		$sql = "SELECT * FROM agendamentos";
		return $this->conexao->query($sql)->fetchAll(PDO::FETCH_OBJ);
	}

	public function buscar_por_id($id)
	{
		$sql = "SELECT * FROM agendamentos WHERE id = :id";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_OBJ);
	}

	public function atualizar($agendamento)
	{
		$sql = "UPDATE agendamentos SET cliente_id = :cliente_id, servico_id = :servico_id, 
                data = :data, horario = :horario, duracao = :duracao, estado = :estado WHERE id = :id";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':id', $agendamento->id);
		$stmt->bindParam(':cliente_id', $agendamento->cliente_id);
		$stmt->bindParam(':servico_id', $agendamento->servico_id);
		$stmt->bindParam(':data', $agendamento->data);
		$stmt->bindParam(':horario', $agendamento->horario);
		$stmt->bindParam(':duracao', $agendamento->duracao);
		$stmt->bindParam(':estado', $agendamento->estado);
		return $stmt->execute();
	}

	public function excluir($id)
	{
		$sql = "DELETE FROM agendamentos WHERE id = :id";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}
}
