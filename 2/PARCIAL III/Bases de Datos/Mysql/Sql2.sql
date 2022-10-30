CREATE DATABASE Veterinary;
USE Veterinary;

CREATE TABLE pet(
	pet_id int,
	nam varchar(40),
    race varchar(20),
    gender varchar(10)
);

INSERT INTO pet(pet_id, nam, race, gender)
VALUES (1,"Pancho Rodriguez", "Chihuahua","Male");
INSERT INTO pet(pet_id, nam, race, gender)
VALUES (2,"Spider-gwen", "Pitbull","Female");
INSERT INTO pet(pet_id, nam, race, gender)
VALUES (3,"Spark", "Bulldog","Female");
INSERT INTO pet(pet_id, nam, race, gender)
VALUES (4,"Daniel", "Pug", "Male");
INSERT INTO pet(pet_id, nam, race, gender)
VALUES (5,"Cooler Daniel", "Pug","Male");


CREATE TABLE vaccines(
	vaccine_id int,
    nam varchar(20),
    doce float,
    disease varchar(20)
);

INSERT INTO vaccines(vaccine_id, nam, doce, disease)
VALUES (1, "Abhayrab", 4.22, "Rabies");
INSERT INTO vaccines(vaccine_id, nam, doce, disease)
VALUES(2, "Parvovirus vaccine", 5.00, "Parvovirus");
INSERT INTO vaccines(vaccine_id, nam, doce, disease)
VALUES(3, "Recombi tek", 10.50, "Lyme");
INSERT INTO vaccines(vaccine_id, nam, doce, disease)
VALUES(4, "Bronchicine", 2.75, "Bordetella");
INSERT INTO vaccines(vaccine_id, nam, doce, disease)
VALUES(5, "Leptop EQ Innovator", 2.75, "Leptopirosis");


CREATE TABLE customer(
	customer_id int,
    nam varchar(20),
    surname varchar(20),
    address varchar(30),
    phone_number numeric(10)
);

INSERT INTO customer(customer_id, nam, surname, address, phone_number)
VALUES (1, "Daniel", "Will", "Avenue 2", 653125874);
INSERT INTO customer(customer_id, nam, surname, address, phone_number)
VALUES (2, "Julia", "Starkiller", "Avenue 6", 653125896);
INSERT INTO customer(customer_id, nam, surname, address, phone_number)
VALUES (3, "X Æ A-12", "Musk", "Avenue 222", 653123658);
INSERT INTO customer(customer_id, nam, surname, address, phone_number)
VALUES (4, "Mario", "Mario", "Avenue 3", 653789635);
INSERT INTO customer(customer_id, nam, surname, address, phone_number)
VALUES (5, "Luigi", "Mario", "Avenue 4", 653654852);

CREATE TABLE product(
	product_id int,
    nam varchar(20),
    mark varchar(20),
    price float
);

INSERT INTO product(product_id, nam, mark, price)
VALUES (1, "Soap", "Woof wild", 1.59);
INSERT INTO product(product_id, nam, mark, price)
VALUES (2, "Brush", "Duck", 0.69);
INSERT INTO product(product_id, nam, mark, price)
VALUES (3, "Shampoo", "Makondo pets", 3.09);
INSERT INTO product(product_id, nam, mark, price)
VALUES (4, "Necklace", "Corona dog", 6.99);
INSERT INTO product(product_id, nam, mark, price)
VALUES (5, "Toy", "Toys z", 4.99);

ALTER TABLE pet ADD age int;

ALTER TABLE customer DROP phone_number;
	
DROP TABLE product;

DROP DATABASE Veterinary;