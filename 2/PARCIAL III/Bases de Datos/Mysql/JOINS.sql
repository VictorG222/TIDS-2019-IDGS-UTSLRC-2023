/*Una cláusula JOIN se usa para combinar filas de dos o más tablas, según una columna relacionada entre ellas.*/
CREATE DATABASE joins;
USE joins;
CREATE TABLE Pedidos(
id_pedidos int auto_increment PRIMARY KEY,
fecha_pedido date
);

/*llave foranea para la relacion de la tabla empleados con pedidos*/
ALTER TABLE pedidos
ADD CONSTRAINT fk_pedidos_empleados
FOREIGN KEY (id_pedidos)
REFERENCES empleados (id_empleados);

INSERT INTO pedidos (fecha_pedido) VALUES ('20-08-01');
INSERT INTO pedidos (fecha_pedido) VALUES ('20-08-04');
INSERT INTO pedidos (fecha_pedido) VALUES ('20-08-07');

CREATE TABLE clientes(
id_cliente int auto_increment PRIMARY KEY,
id_pedidos int not null,
nombre varchar (20),
apellido varchar (20),
ciudad varchar(35),
CONSTRAINT fk_pedidos_clientes FOREIGN KEY (id_pedidos) REFERENCES pedidos (id_pedidos)
);

INSERT INTO clientes(id_pedidos,nombre,apellido,ciudad) VALUES ('1','Sofia','Hernandez','Mexicali');
INSERT INTO clientes(id_pedidos,nombre,apellido,ciudad) VALUES ('2','Aurora','Sanchez','San luis');
INSERT INTO clientes(id_pedidos,nombre,apellido,ciudad) VALUES ('3','Ariel','Perez','Tijuana');

CREATE TABLE empleados(
id_empleado int auto_increment PRIMARY KEY,
nombre varchar (20),
apellido varchar (20),
f_nacimiento date
);

INSERT INTO empleados (nombre,apellido,f_nacimiento) VALUES ('David', 'Flores', '1996-09-18');
INSERT INTO empleados (nombre,apellido,f_nacimiento) VALUES ('Sabrina', 'Torres', '1996-09-19');
INSERT INTO empleados (nombre,apellido,f_nacimiento) VALUES ('Fernanda', 'Perez', '1996-09-20');

/*inner join*/


/* La palabra clave LEFT JOIN devuelve todos los registros de la tabla izquierda (tabla1) 
y los registros coincidentes de la tabla derecha (tabla2). El resultado es NULL desde el lado derecho, si no hay coincidencia.*/

/*left join*/


/*La palabra clave RIGHT JOIN devuelve todos los registros de la tabla derecha (tabla2) 
y los registros coincidentes de la tabla izquierda (tabla1). El resultado es NULL desde el lado izquierdo, cuando no hay coincidencia.*/

/*right join*/
