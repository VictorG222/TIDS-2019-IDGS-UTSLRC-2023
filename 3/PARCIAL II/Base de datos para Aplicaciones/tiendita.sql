/*crear una base de datos*/
CREATE DATABASE tiendita;
/*indicarle al SGBD que utilice esta bd*/
USE tiendita;
/*creamos una tabla*/
CREATE TABLE productos(
id_producto int auto_increment PRIMARY KEY,
nombre varchar (50) NOT NULL,
precio decimal(10,2) NOT NULL,
fecha_alta date,
idcat int NOT NULL
);
/*creamos una tabla*/
CREATE TABLE categoria(
id_categoria int auto_increment PRIMARY KEY,
nombre varchar (50) NOT NULL
);
/*creamos una tabla*/
  CREATE TABLE proveedores(
  id_proveedores INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_proveedores));
  /*creamos una tabla*/
   CREATE TABLE detalle_producto_proveedor (
  id_detalle INT auto_increment PRIMARY KEY,
  id_prod INT NOT NULL,
  id_proveed INT NOT NULL);
  /*tabla temporal*/
  CREATE TABLE temp (
  id_temp int AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(45) DEFAULT NULL);
  
/*agregamos la llave foranea en productos con categoria*/
ALTER TABLE productos 
ADD CONSTRAINT fk_procat
  FOREIGN KEY (idcat)
  REFERENCES categoria (id_categoria)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
  /*agregamos la llave foranea en detalle para el proveedor*/
ALTER TABLE detalle_producto_proveedor
ADD CONSTRAINT fk_prov
  FOREIGN KEY (id_proveed)
  REFERENCES provedores (id_proveedores)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
  /*agregamos la llave foranea en detalle para el producto*/
ALTER TABLE detalle_producto_proveedor
ADD CONSTRAINT fk_prod
  FOREIGN KEY (id_prod)
  REFERENCES productos (id_producto)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
  
/*registros de la tabla categoria */  
  INSERT INTO categoria (nombre) VALUES ('Bebidas');
  INSERT INTO categoria (nombre) VALUES ('Aceites');
  INSERT INTO categoria (nombre) VALUES ('Detergentes');
  INSERT INTO categoria (nombre) VALUES ('Dulces');
  INSERT INTO categoria (nombre) VALUES ('Frutas');
  
  /*regustros de la tabla productos*/
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('coca cola','20.50','2020-09-15', 2);
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('fanta','15.50','2020-09-16', 2);
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('Sprite','20.50','2020-09-17', 2);
  
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('nutrioli','28.50','2020-10-17', 3);
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('oleico','30.50','2020-10-18', 3);
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('coco','80.50','2020-10-19', 3);
  
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('ace','16.50','2020-10-15', 4);
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('blanca nieves','10.50','2020-10-14', 4);
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('123','13.50','2020-10-13', 4);
  
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('chocolate','16.50','2020-10-12', 5);
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('paleta','5.50','2020-10-11', 5);
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('caramelo','3.50','2020-10-10', 5);
  
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('pera','30.50','2020-11-01', 6);
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('manzana','25.50','2020-11-02', 6);
  INSERT INTO productos (nombre,precio,fecha_alta,idcat) VALUES ('platano','17.50','2020-11-03', 6);
  
  /*registro en etabla temporal*/
  INSERT INTO temp (nombre) VALUES ('uno'),('dos');