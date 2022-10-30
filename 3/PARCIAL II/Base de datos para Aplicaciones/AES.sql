CREATE DATABASE secreto;

USE secreto;



CREATE TABLE usuario(
id_u int auto_increment PRIMARY KEY,
usuario varchar (20) NOT NULL,
clave varchar (30) NOT NULL

)ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


INSERT INTO usuario (usuario, clave) 
VALUES ('Roberto', aes_encrypt('pass1','usuario1'));

SELECT * FROM usuario;
	
SELECT id_u, usuario,(aes_decrypt(clave, 'pass1')) Recuperado FROM usuario;
SELECT id_u, usuario, CAST(aes_decrypt(clave, 'pass1') AS CHAR (30)) Recuperado FROM usuario;

DROP DATABASE secreto;