CREATE DATABASE smartglove;
USE smartglove;

CREATE TABLE usuario (
	CodUsuario int AUTO_INCREMENT PRIMARY KEY,
    Senha varchar(45)
);
CREATE TABLE administrador (
	CodAdmin int AUTO_INCREMENT PRIMARY KEY,
    CodUsuario int,
    FOREIGN KEY (CodUsuario) REFERENCES usuario(CodUsuario)
);
insert into administrador(CodUsuario)
values (1);

drop table letras;
CREATE TABLE letras(
	codLetras int AUTO_INCREMENT PRIMARY KEY,
    imagem varchar(1000),
    valor varchar(1000)
);

drop table palavras;
CREATE TABLE palavras(
	codPalavras int AUTO_INCREMENT PRIMARY KEY,
    imagem varchar(1000),
    valor varchar(1000)
);

SELECT * FROM palavras;
SELECT * FROM letras;