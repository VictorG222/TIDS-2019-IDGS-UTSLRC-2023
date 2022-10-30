CREATE DATABASE Games;
USE Games;

CREATE TABLE team(
	 id_team int auto_increment PRIMARY KEY,
     team_name varchar (20),
     number_team int (3),
     phone_number int (11),
     city varchar (20)
);

CREATE TABLE players(
	 id_player int auto_increment PRIMARY KEY,
     player_name varchar (20),
     number_player int (20),
     age int,
     phone_number int (11)
);

CREATE TABLE  coach(
	 id_coach INT PRIMARY KEY AUTO_INCREMENT,
     coach_name varchar (20),
     age int,
     phone_number int (11)
);

CREATE TABLE stadium(
	 id_stadium INT PRIMARY KEY AUTO_INCREMENT,
     stadium_name varchar (20),
     address varchar (30),
     capacity int
);

CREATE TABLE schedules (
	 id_schedule INT PRIMARY KEY AUTO_INCREMENT,
     date_game DATE,
     team_name varchar (20)
);

ALTER TABLE team
ADD CONSTRAINT fk_team_member 
FOREIGN KEY (id_team)
REFERENCES players(id_player);

ALTER TABLE coach
ADD CONSTRAINT fk_team_coach 
FOREIGN KEY (id_coach)
REFERENCES team (id_team);

ALTER TABLE stadium
ADD CONSTRAINT fk_stadium_schedule 
FOREIGN KEY (id_stadium)
REFERENCES schedules (id_schedule);

ALTER TABLE schedules
ADD CONSTRAINT fk_team_schedules 
FOREIGN KEY (id_schedule)
REFERENCES team (id_team);

INSERT INTO team (team_name, number_team, phone_number, city)
VALUES ('Rojo', 10, 65312345, 'San Luis');
INSERT INTO team (team_name, number_team, phone_number, city)
VALUES ('Azul', 20, 65365432, 'San Luis');
INSERT INTO team (team_name, number_team, phone_number, city)
VALUES ('Verde', 30, 65344253, 'San Luis');
INSERT INTO team (team_name, number_team, phone_number, city)
VALUES ('Negro', 40, 65363521, 'San Luis');
INSERT INTO team (team_name, number_team, phone_number, city)
VALUES ('Blanco', 50, 65421536, 'San Luis');

INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('A', 100, 20, 65398765);
INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('B', 200, 21, 65398784);
INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('C', 101, 20, 65398775);
INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('D', 300, 20, 65398798);
INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('E', 102, 22, 65398712);
INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('F', 10, 20, 653987676);
INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('G', 1, 20, 65398791);
INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('H', 99, 22, 65398768);
INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('I', 500, 22, 65398768);
INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('J', 666, 20, 65398712);
INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('K', 777, 20, 65398768);
INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('L', 222, 19, 65398795);
INSERT INTO players (player_name, number_player, age, phone_number)
VALUES ('M', 584, 20, 65398758);


INSERT INTO coach (coach_name, age, phone_number)
VALUES ('A1', 40, 65397601);
INSERT INTO coach (coach_name, age, phone_number)
VALUES ('B2', 50, 65398702);
INSERT INTO coach (coach_name, age, phone_number)
VALUES ('C3', 37, 65987603);
INSERT INTO coach (coach_name, age, phone_number)
VALUES ('D4', 17, 65397604);
INSERT INTO coach (coach_name, age, phone_number)
VALUES ('E5', 63, 65398765);
INSERT INTO coach (coach_name, age, phone_number)
VALUES ('F6', 56, 65987606);

INSERT INTO stadium (stadium_name, address, capacity)
VALUES ('I', 'Street 1', 5000);
INSERT INTO stadium (stadium_name, address, capacity)
VALUES ('II', 'Street 10', 4000);
INSERT INTO stadium (stadium_name, address, capacity)
VALUES ('III', 'Street 100', 10000);

INSERT INTO schedules (date_game, team_name)
VALUES ('2022-6-02', 'Rojo' );
INSERT INTO schedules (date_game, team_name)
VALUES ('2022-6-05', 'Azul' );
INSERT INTO schedules (date_game, team_name)
VALUES ('2022-6-10', 'Verde' );
INSERT INTO schedules (date_game, team_name)
VALUES ('2022-6-16', 'Negro' );

ALTER TABLE team
DROP phone_number;

SELECT coach_name, age
FROM coach
WHERE age BETWEEN 25 AND 70;

SELECT team_name, number_team
FROM team
ORDER BY id_team DESC;

SELECT DISTINCT age
FROM players;

SELECT COUNT(id_team), city
FROM team
GROUP BY city;

DROP DATABASE Games;