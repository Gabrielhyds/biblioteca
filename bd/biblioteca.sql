CREATE DATABASE biblioteca;
USE biblioteca;


CREATE TABLE livros(
	codigo INT PRIMARY KEY,
	nomeLivro VARCHAR(200),
	editora VARCHAR(200),
	genero VARCHAR(100),
	quantidade INT
);
