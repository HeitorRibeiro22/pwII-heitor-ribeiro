CREATE DATABASE cadastrodb;
use cadastrodb;
CREATE TABLE pessoas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    idade INT,
    cpf VARCHAR(14),
    endereco VARCHAR(255),
    email VARCHAR(100),
    celular VARCHAR(20)
);

 