CREATE DATABASE tiendita;
USE tiendita;
CREATE TABLE productos (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    estado VARCHAR(20) NOT NULL DEFAULT 'disponible',
    precio FLOAT NOT NULL DEFAULT 0.0,
    PRIMARY KEY(id)
);
INSERT INTO productos (nombre, estado, precio) 
VALUES ('Producto A','disponible', 8), ('Producto B', 'disponible', 1.5),('Producto C', 'agotado', 80);
INSERT INTO productos (nombre, estado, precio) 
VALUES ('Producto D','disponible', 5), ('Producto E', 'disponible', 1.5),('Producto F', 'agotado', 80);
INSERT INTO productos (nombre, estado, precio) 
VALUES ('Producto G','disponible', 10), ('Producto H', 'disponible', 20),('Producto I', 'agotado', 30);

CREATE VIEW vistaproductosbaratos
AS SELECT nombre FROM productos
WHERE precio<80;

SELECT * FROM vistaproductosbaratos;

ALTER VIEW vistaproductosbaratos
AS SELECT nombre, estado FROM productos
WHERE estado = 'agotado';

DROP VIEW vistaproductosbaratos;

CREATE INDEX idx_productos ON productos (nombre);

SHOW INDEX FROM productos;

ALTER TABLE productos
DROP INDEX idx_productos;