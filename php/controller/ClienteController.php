<?php

include __DIR__ . '/../model/Cliente.php';
include __DIR__ . '/../model/DAO/ClienteDAO.php';

class ClienteController
{
    private $cliente;
    private $cliente_dao;

    public function __construct()
    {
        $this->cliente = new Cliente();
        $this->cliente_dao = new ClienteDAO();
    }

    public function index()
    {
        $clientes = $this->cliente_dao->mostrar_tudo();
        session_start();
        $_SESSION['clientes'] = $clientes;
        header('Location: ./view/cliente/mostrar_tudo.php');
    }

    public function create()
    {
        header('Location: view/cliente/novo.php');
    }

    public function store()
    {
        $this->cliente->nome = $_POST['nome'];
        $this->cliente->cpf = $_POST['cpf'];
        $this->cliente->dt_nasc = $_POST['dt_nasc'];
        $this->cliente->whatsapp = $_POST['whatsapp'];
        $this->cliente->logradouro = $_POST['logradouro'];
        $this->cliente->num = $_POST['num'];
        $this->cliente->bairro = $_POST['bairro'];

        $resp = $this->cliente_dao->inserir($this->cliente);
        if ($resp) {
            echo 'Cliente cadastrado com sucesso!';
        }
    }

    public function edit($id)
    {
        session_start();
        $_SESSION['cliente'] = $this->cliente_dao->buscar_por_id($id);
        header('Location: view/cliente/editar.php');
    }

    public function update()
    {
        $this->cliente->id = $_POST['id'];
        $this->cliente->nome = $_POST['nome'];
        $this->cliente->cpf = $_POST['cpf'];
        $this->cliente->dt_nasc = $_POST['dt_nasc'];
        $this->cliente->whatsapp = $_POST['whatsapp'];
        $this->cliente->logradouro = $_POST['logradouro'];
        $this->cliente->num = $_POST['num'];
        $this->cliente->bairro = $_POST['bairro'];

        $resp = $this->cliente_dao->atualizar($this->cliente);
        if ($resp) {
            echo 'Cliente atualizado com sucesso!';
        }
    }

    public function delete($id)
    {
        $resp = $this->cliente_dao->excluir($id);
        if ($resp) {
            echo 'Cliente excluído com sucesso!';
        }
    }

    public function show($id)
    {
        session_start();
        $_SESSION['cliente'] = $this->cliente_dao->buscar_por_id($id);
        header('Location: view/cliente/mostrar_registro.php');
    }
}
