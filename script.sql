CREATE DATABASE loja DEFAULT CHARACTER SET utf8;
USE loja;

CREATE TABLE clientes (
    id VARCHAR(255) NOT NULL,
    data_nascimento DATE NOT NULL,
    nome VARCHAR(255),
    endereco VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at DATE NOT NULL,
PRIMARY KEY (id))
