/* 
 clientes (id, nome, cpf, dt_nasc, whatsapp, logradouro, num, bairro)
 servicos (id, nome, valor, descricao)
 produtos (id, nome, valor, marca, categoria)
 agendamentos (id, cliente_id, servico_id, data, horario, duracao, estado)
 compras (id, cliente_id, produto_id, data, horario, qtd)
 */
CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    dt_nasc DATE NOT NULL,
    whatsapp VARCHAR(13) NOT NULL,
    logradouro VARCHAR(100) NOT NULL,
    num INT NOT NULL,
    bairro VARCHAR(100) NOT NULL
);
CREATE TABLE IF NOT EXISTS servicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    valor FLOAT NOT NULL,
    descricao TEXT NOT NULL
);
CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    valor FLOAT NOT NULL,
    marca VARCHAR(100) NOT NULL,
    categoria VARCHAR(100) NOT NULL
);
CREATE TABLE IF NOT EXISTS agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    servico_id INT NOT NULL,
    data DATE NOT NULL,
    horario TIME NOT NULL,
    duracao FLOAT NOT NULL,
    estado BOOLEAN NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id),
    FOREIGN KEY (servico_id) REFERENCES servicos(id)
);
CREATE TABLE IF NOT EXISTS compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    produto_id INT NOT NULL,
    data DATE NOT NULL,
    horario TIME NOT NULL,
    qtd INT NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id),
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
);