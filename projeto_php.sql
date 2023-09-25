CREATE DATABASE projeto_php;
USE projeto_php;

CREATE TABLE cliente(
cod_cliente int not null auto_increment primary key,
nome varchar(255),
telefone varchar(255),
endereco varchar(255),
email varchar(255),
idade int,
salario double
);

CREATE TABLE usuario(
login varchar(255),
senha varchar(255)
);

INSERT INTO usuario VALUES("Helo", "2103");