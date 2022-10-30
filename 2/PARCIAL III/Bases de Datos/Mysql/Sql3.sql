CREATE DATABASE Sams_Club;
USE Sams_Club;

CREATE TABLE Employees(
	id_employees int,
    nam varchar(20),
    last_name varchar(20),
    address varchar(30)
);

ALTER TABLE Employees ADD phone_number int;

INSERT INTO Employees( id_employees, nam, last_name, address, phone_number)
VALUES (1, 'Luis', 'Gonzalez', 'Avenue 15 #1504', 653123574);
INSERT INTO Employees( id_employees, nam, last_name, address, phone_number)
VALUES (2, 'Pedro', 'Cortes', 'Avenue 20 #2056', 653789654);
INSERT INTO Employees( id_employees, nam, last_name, address, phone_number)
VALUES (3, 'Fernanda', 'Ruiz', 'Avenue 56 #5627', 653785214);

CREATE TABLE Branch(
	id_branch int,
    address varchar(50),
    city varchar(30),
    phone int
);

INSERT INTO Branch( id_branch, address, city, phone)
VALUES (1, 'Avenue 200 #2001', 'Tijuana', '01800456987');
INSERT INTO Branch( id_branch, address, city, phone)
VALUES (2, 'Avenue 201 #2011', 'Yuma', '01800785241');
INSERT INTO Branch( id_branch, address, city, phone)
VALUES (3, 'Avenue 202 #2021', 'Mexicali', '01800852364');
INSERT INTO Branch( id_branch, address, city, phone)
VALUES (4, 'Avenue 203 #2031', 'Nogales', '01800985126');

ALTER TABLE Branch DROP phone;

CREATE TABLE Customer(
	id_customer int,
    nam varchar(20),
    last_name varchar(20),
    address varchar(30)
);

INSERT INTO Customer( id_customer, nam, last_name, address)
VALUES (1, 'Ivan', 'Rodriguez', 'Avenue 78 #7816');
INSERT INTO Customer( id_customer, nam, last_name, address)
VALUES (2, 'Sofia', 'Garcia', 'Avenue 78 #7817');
INSERT INTO Customer( id_customer, nam, last_name, address)
VALUES (3, 'Ruby', 'Valenzuela', 'Avenue 78 #7818');
INSERT INTO Customer( id_customer, nam, last_name, address)
VALUES (4, 'Angel', 'Bustamante', 'Avenue 78 #7819');

UPDATE Customer SET last_name = 'Villanueva' where id_customer = 3;

DELETE FROM Customer WHERE id_customer = 1;  

SELECT nam, address FROM Customer;

DROP TABLE Customer;

DELETE FROM Branch WHERE id_branch = 1; 
DELETE FROM Branch WHERE id_branch = 2;
DELETE FROM Branch WHERE id_branch = 3;
DELETE FROM Branch WHERE id_branch = 4;

DROP DATABASE Sams_Club;