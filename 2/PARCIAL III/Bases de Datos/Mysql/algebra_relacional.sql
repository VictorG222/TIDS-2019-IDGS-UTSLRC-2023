CREATE DATABASE AR;
USE AR;
CREATE TABLE clases(
id_class int auto_increment PRIMARY KEY,
nombre varchar(20),
dificultad int (2),
tel int (11)
);
INSERT INTO clases (nombre,dificultad,tel) VALUES ('Base de datos','5','653128974');
INSERT INTO clases (nombre,dificultad,tel) VALUES ('Programacion','10', '653179754');
INSERT INTO clases (nombre,dificultad,tel) VALUES ('Mantenimiento', '4','651289454');
INSERT INTO clases (nombre,dificultad,tel) VALUES ('Matematicas','5', '653189754');
INSERT INTO clases (nombre,dificultad,tel) VALUES ('Sociales', '3','653189754');
INSERT INTO clases (nombre,dificultad,tel) VALUES ('Ingles I', '5','653128654');
INSERT INTO clases (nombre,dificultad,tel) VALUES ('Ingles II', '10','631287554');

CREATE TABLE profesores(
id_prof int auto_increment PRIMARY KEY,
nombre varchar (20),
apellido varchar (20),
ciudad varchar (30),
tel int (11)
);
ALTER TABLE profesores
ADD CONSTRAINT fk_prof_clases
FOREIGN KEY (id_prof)
REFERENCES clases (id_class);

INSERT INTO profesores (nombre,apellido,ciudad,tel) VALUES ('Susy','Mercado', 'San Luis','653128974');
INSERT INTO profesores (nombre,apellido,ciudad,tel) VALUES ('Miguel','Rodriguez','San Luis','653179754');
INSERT INTO profesores (nombre,apellido,ciudad,tel) VALUES ('Ricardo','Soto','Mexicali','651289454');
INSERT INTO profesores (nombre,apellido,ciudad,tel) VALUES ('Arnoldo','Delgado','Mexicali','653189754');
INSERT INTO profesores (nombre,apellido,ciudad,tel) VALUES ('Vladimir','Galindo', 'Mexicali','653189754');
INSERT INTO profesores (nombre,apellido,ciudad,tel) VALUES ('Betty','Flores','Tijuana','653128654');
INSERT INTO profesores (nombre,apellido,ciudad,tel) VALUES ('Cinthya','Rivera', 'Tijuana','631287554');

CREATE TABLE alumno(
id_alumno int auto_increment PRIMARY KEY,
nombre varchar (50),
edad int,
ciudad varchar (60),
tel int (11)
);
ALTER TABLE alumno
ADD CONSTRAINT fk_alum_clases
FOREIGN KEY (id_alumno)
REFERENCES clases (id_class);

INSERT INTO alumno (nombre,edad,ciudad,tel) VALUES ('Sergio','20','San Luis','538746910');
INSERT INTO alumno (nombre,edad,ciudad,tel) VALUES ('Valentina','23','San Luis','538796910');
INSERT INTO alumno (nombre,edad,ciudad,tel) VALUES ('Rogelio','25','San Luis','538746910');
INSERT INTO alumno (nombre,edad,ciudad,tel) VALUES ('Valeria','19','Mexicali','548746710');
INSERT INTO alumno (nombre,edad,ciudad,tel) VALUES ('Brandon','23','Mexicali','538746950');
INSERT INTO alumno (nombre,edad,ciudad,tel) VALUES ('Jesus','20','Mexicali','533745950');
INSERT INTO alumno (nombre,edad,ciudad,tel) VALUES ('Fernanda','20','Tijuana','538846910');
INSERT INTO alumno (nombre,edad,ciudad,tel) VALUES ('Benjamin','20','Tijuana','539847910');

/*The BETWEEN operator selects values within a given range. The values can be numbers, text, or dates.*/
SELECT nombre, dificultad
FROM clases
WHERE dificultad BETWEEN 2 AND 5;

/*The ORDER BY keyword is used to sort the result-set in ascending or descending order.*/
SELECT nombre, dificultad
FROM clases
ORDER BY dificultad ASC;

SELECT nombre, dificultad
FROM clases
ORDER BY dificultad DESC;

/*The SELECT DISTINCT statement is used to return only distinct (different) values.*/
SELECT DISTINCT dificultad 
FROM clases;

SELECT DISTINCT edad 
FROM alumno;

/*The GROUP BY statement groups rows that have the same values into summary rows, like "find the number of customers in each country".*/
SELECT COUNT(id_alumno), ciudad 
FROM alumno
WHERE edad>20
GROUP BY ciudad;
 
/*SELECT projection is done by simply specifying the subset of attributes in the clause*/
SELECT nombre, ciudad
FROM profesores;
