 -- Arquivo de criação do banco de dados


 DROP DATABASE IF EXISTS projeto1;
 CREATE DATABASE projeto1;
 USE projeto1;
 
 CREATE TABLE usuario 
 (
	id_usuario int (4) NOT NULL PRIMARY KEY auto_increment,
    nome_usuario varchar (50) NOT NULL,
    email_usuario varchar (50) NOT NULL,
    fone_usuario varchar (30) NULL,
    senha varchar (30) NOT NULL
 );

--use projeto1;
-- INSERIR DADOS
--insert into usuario
--(nome_usuario, fone_usuario, email_usuario, senha)
--values ('CÁSSIO','(18) 3622-9046','cassio@mail.com','1234');

--select * from usuario;