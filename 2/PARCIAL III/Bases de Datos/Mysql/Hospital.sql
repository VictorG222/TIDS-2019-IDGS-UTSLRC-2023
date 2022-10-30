CREATE DATABASE hospital;
USE hospital;

CREATE TABLE floor_(
	floor_id int auto_increment PRIMARY KEY,
    plant_name varchar(20),
    number_beds int
);

CREATE TABLE bed(
	bed_id int auto_increment PRIMARY KEY,
    num_cam int
);

CREATE TABLE patient(
	insurance_id int auto_increment PRIMARY KEY,
    nam varchar(20),
    last_name varchar (20),
    f_birth date,
    age int
);

CREATE TABLE bedAlocation(
	bedA_id int auto_increment PRIMARY KEY,
    f_input date
);

CREATE TABLE doctor(
	medical_id int auto_increment PRIMARY KEY,
    nam varchar(20),
    last_name varchar(20)
);

CREATE TABLE queries(
	query_id int auto_increment PRIMARY KEY,
    diagnosis varchar (20),
    f_query date
);

CREATE TABLE history_(
	history_id int auto_increment PRIMARY KEY,
    f_input date,
    f_output date
);

INSERT INTO floor_(plant_name, number_beds)
VALUES ('A',8);
INSERT INTO floor_(plant_name, number_beds)
VALUES ('B',6);
INSERT INTO floor_(plant_name, number_beds)
VALUES ('C',4);
INSERT INTO floor_(plant_name, number_beds)
VALUES ('D',2);

INSERT INTO bed(num_cam)
VALUES (10);
INSERT INTO bed(num_cam)
VALUES (20);
INSERT INTO bed(num_cam)
VALUES (30);
INSERT INTO bed(num_cam)
VALUES (40);

INSERT INTO patient(nam, last_name, f_birth, age)
VALUES ('Luis', 'Perez', '2000-7-04',20);
INSERT INTO patient(nam, last_name, f_birth, age)
VALUES ('Juan', 'Perez', '2000-7-04',20);
INSERT INTO patient(nam, last_name, f_birth, age)
VALUES ('Pepe', 'Perez', '2000-7-04',20);
INSERT INTO patient(nam, last_name, f_birth, age)
VALUES ('Maria', 'Perez', '1980-7-04',40);

INSERT INTO bedAlocation(f_input)
VALUES ('2020-7-23');
INSERT INTO bedAlocation(f_input)
VALUES ('2020-7-26');
INSERT INTO bedAlocation(f_input)
VALUES ('2020-7-29');
INSERT INTO bedAlocation(f_input)
VALUES ('2020-7-31');

INSERT INTO doctor(nam, last_name)
VALUES ('Refugio', 'Garcia');
INSERT INTO doctor(nam, last_name)
VALUES ('Esteban', 'Lopez');
INSERT INTO doctor(nam, last_name)
VALUES ('Julion', 'Miramar');
INSERT INTO doctor(nam, last_name)
VALUES ('Pedro', 'Zazueta');

INSERT INTO queries(diagnosis, f_query)
VALUES ('Flu','2020-10-11');
INSERT INTO queries(diagnosis, f_query)
VALUES ('Diabetes','2020-10-14');
INSERT INTO queries(diagnosis, f_query)
VALUES ('COVID-19','2020-10-17');
INSERT INTO queries(diagnosis, f_query)
VALUES ('Appendicitis','2020-10-23');

INSERT INTO history_( f_input ,f_output)
VALUES ('2019-10-23','2020-11-23');
INSERT INTO history_( f_input ,f_output)
VALUES ('2019-10-23','2020-11-23');
INSERT INTO history_( f_input ,f_output)
VALUES ('2019-10-23','2020-11-23');
INSERT INTO history_( f_input ,f_output)
VALUES ('2019-10-23','2020-11-23');

ALTER TABLE floor_
ADD CONSTRAINT fk_bed_floor
FOREIGN KEY (floor_id)
REFERENCES bed (bed_id);

ALTER TABLE bed
ADD CONSTRAINT fk_bed_Alocation
FOREIGN KEY (bed_id)
REFERENCES bedAlocation (bedA_id);

ALTER TABLE history_
ADD CONSTRAINT fk_bedAlocation_history
FOREIGN KEY (history_id)
REFERENCES bedAlocation (bedA_id);

ALTER TABLE history_
ADD CONSTRAINT fk_patient_history
FOREIGN KEY (history_id)
REFERENCES patient (insurance_id);

ALTER TABLE bedAlocation
ADD CONSTRAINT fk_bedAlocation_query
FOREIGN KEY (bedA_id)
REFERENCES queries (query_id);

ALTER TABLE doctor
ADD CONSTRAINT fk_query_doctor
FOREIGN KEY (medical_id)
REFERENCES queries (query_id);

UPDATE doctor 
SET last_name='Maximiliano' 
WHERE medical_id=3;

ALTER TABLE doctor 
DROP last_name;

SELECT nam FROM patient 
WHERE age>25;

SELECT diagnosis FROM queries;

SELECT last_name, age FROM patient 
ORDER BY age ASC;

SELECT medical_id FROM doctor
UNION
SELECT f_query FROM queries;

DROP TABLE floor_;

DELETE FROM patient WHERE insurance_id=4;
DELETE FROM patient WHERE insurance_id=3;

DROP DATABASE hospital;