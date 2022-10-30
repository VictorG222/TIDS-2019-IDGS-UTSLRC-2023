#ddl
CREATE DATABASE DDL;
USE DDL;
CREATE TABLE persona(
id_persona int,
nombre varchar(20),
apellido varchar(20),
edad int
);

ALTER TABLE persona
ADD direccion int;

ALTER TABLE persona
MODIFY direccion varchar(20);

ALTER TABLE persona
DROP direccion; 

INSERT INTO persona(id_persona, nombre, apellido, edad)
VALUES ('1',"Juan","Perez",'20');

INSERT INTO persona(id_persona, nombre, apellido, edad)
VALUES ('2',"Luis","Perez",'25');

DROP TABLE persona;

DROP DATABASE DDL;

select * from persona;