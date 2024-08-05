drop database if exists Canil_Da_Prefeitura;

create database Canil_Da_Prefeitura;
use Canil_Da_Prefeitura;


CREATE TABLE Pessoa (
    id_pessoa INT PRIMARY KEY AUTO_INCREMENT,
    nome_pessoa VARCHAR(100),
    email VARCHAR(100),
    endereço VARCHAR(100),
    bairro VARCHAR(100),
    cep VARCHAR(9),
    id_cidade INT,
    foreign key(id_cidade, Cidade)
);
CREATE TABLE Animal (
    id_animal INT PRIMARY KEY AUTO_INCREMENT,
    nome_animal VARCHAR(100),
    especie VARCHAR(100),
    raça VARCHAR(100),
    data_nascimento DATE,
    idade INT,
    castrado BOOL,
    id_pessoa INT,
    foreign key(id_pessoa, Pessoa)
);
CREATE TABLE Cidade (
    id_cidade INT PRIMARY KEY AUTO_INCREMENT,
    nome_cidade VARCHAR(100),
    estado CHAR(2)
);