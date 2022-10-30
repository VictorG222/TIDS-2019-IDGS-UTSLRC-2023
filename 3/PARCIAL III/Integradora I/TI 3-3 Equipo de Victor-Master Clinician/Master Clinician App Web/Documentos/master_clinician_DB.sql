CREATE DATABASE master_clinician;

USE master_clinician;

CREATE TABLE `master_clinician`.`paciente` (
  `paciente_id` INT(10) NOT NULL AUTO_INCREMENT,
  `nombre_completo_paciente` VARCHAR(255) NOT NULL,
  `fecha_de_nacimiento` DATE NOT NULL,
  `genero` VARCHAR(12) NOT NULL,
  `tipo_de_sangre` VARCHAR(5) NOT NULL,
  `peso` FLOAT NOT NULL,
  `estatura` FLOAT NOT NULL,
  `direccion` VARCHAR(255) NOT NULL,
  `correo_electronico` VARCHAR(255) NOT NULL,
  `contraseña` VARCHAR(12) NOT NULL,
  `telefono_de_casa` VARCHAR(12) NOT NULL,
  `telefono_movil` VARCHAR(12) NOT NULL,
  `enfermedades` VARCHAR(255) NOT NULL,
  `alergias` VARCHAR(255) NOT NULL,
  `cirugias_y_accidentes` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`paciente_id`));
  
CREATE TABLE `master_clinician`.`medico` (
  `medico_id` INT(10) NOT NULL AUTO_INCREMENT,
  `nombre_completo` VARCHAR(255) NOT NULL,
  `cedula_profesional` VARCHAR(255) NOT NULL,
  `especialidad` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`medico_id`));

  

CREATE TABLE `master_clinician`.`cita` (
  `cita_id` INT(10) NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `fecha_de_cancelacion` DATE NULL,
  `paciente` INT(10) NOT NULL,
  `medico` INT(10) NOT NULL,
  PRIMARY KEY (`cita_id`),
  CONSTRAINT `fk_paciente_id` FOREIGN KEY (paciente)
  REFERENCES paciente(paciente_id),
  CONSTRAINT `fk_medico_id` FOREIGN KEY (medico)
  REFERENCES medico(medico_id)
  );


INSERT INTO `master_clinician`.`paciente` (`nombre_completo_paciente`, `fecha_de_nacimiento`, `genero`, `tipo_de_sangre`, `peso`, `estatura`, `direccion`, `correo_electronico`, `contraseña`, `telefono_de_casa`, `telefono_movil`, `enfermedades`, `alergias`, `cirugias_y_accidentes`) VALUES ('Juan Meza Alvarez', '2000-11-21', 'Masculino', 'O-', '80', '1.76', 'Avenida Madero 13 y 14', 'insertauncorreoelectronico@gmail.com', '123456789', '6531326854', '653491132', 'N/A', 'N/A', 'N/A');
INSERT INTO `master_clinician`.`paciente` (`nombre_completo_paciente`, `fecha_de_nacimiento`, `genero`, `tipo_de_sangre`, `peso`, `estatura`, `direccion`, `correo_electronico`, `contraseña`, `telefono_de_casa`, `telefono_movil`, `enfermedades`, `alergias`, `cirugias_y_accidentes`) VALUES ('Victor Manuel Galvan Covarrubias', '2000-11-02', 'Masculino', 'O+', '85', '1.7', 'Avenida Flores 30 y 31', 'victor@gmail.com', '123', '6531550633', '6532097580', 'N/A', 'Ambroxol', 'Apendicitis');

INSERT INTO `master_clinician`.`medico` (`nombre_completo`, `cedula_profesional`, `especialidad`) VALUES ('Roberto Jaime Palacio Gaxiola', '9573168492', 'Cardiología');
INSERT INTO `master_clinician`.`medico` (`nombre_completo`, `cedula_profesional`, `especialidad`) VALUES ('Laura Silvia Perez Garcia', '7214685394', 'Cardiología');

INSERT INTO `master_clinician`.`cita` (`fecha`, `hora`, `paciente`, `medico`)
VALUES ('2021-7-04', '7:00:00', 2, 1);
INSERT INTO `master_clinician`.`cita` (`fecha`, `hora`, `paciente`, `medico`)
VALUES ('2021-8-04', '7:00:00', 2, 1);
INSERT INTO `master_clinician`.`cita` (`fecha`, `hora`, `paciente`, `medico`)
VALUES ('2021-8-04', '7:00:00', 1, 1);



/*MEZA JUAN*/
USE `master_clinician`;

DELIMITER $$
USE `master_clinician`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `web_sp_insertpaciente`(in _nombre_completo varchar(255), in _fecha_de_nacimiento date, in _genero varchar(12), _tipo_de_sangre varchar(5), _peso float, _estatura float, _direccion varchar(255), _correo_electronico varchar(255), _contraseña varchar(12), _telefono_de_casa varchar(12), _telefono_movil varchar(12), _enfermedades varchar(255), _alergias varchar(255), _cirugias_y_accidentes varchar(255))
BEGIN
INSERT INTO paciente (nombre_completo_paciente, fecha_de_nacimiento, genero, tipo_de_sangre, peso, estatura, direccion, correo_electronico, contraseña, telefono_de_casa, telefono_movil, enfermedades, alergias, cirugias_y_accidentes) values (_nombre_completo,_fecha_de_nacimiento,_genero,_tipo_de_sangre,_peso,_estatura,_direccion,_correo_electronico,_contraseña,_telefono_de_casa,_telefono_movil,_enfermedades,_alergias,_cirugias_y_accidentes);
END$$

DELIMITER ;


/*GALVAN VICTOR*/
USE `master_clinician`;

DELIMITER $$
USE `master_clinician`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `web_sp_login`(in _correo_electronico VARCHAR(255), in _contraseña VARCHAR(12))
BEGIN
    SELECT * FROM paciente WHERE  correo_electronico =  _correo_electronico AND contraseña = _contraseña;
END$$

DELIMITER ;



/*GALVAN VICTOR*/
USE `master_clinician`;

DELIMITER $$
USE `master_clinician`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `web_sp_citalist`(IN _correo_electronico varchar(255))
BEGIN
	SELECT fecha, hora, p.correo_electronico, p.nombre_completo_paciente, m.nombre_completo FROM cita c
	INNER JOIN paciente p ON p.paciente_id = c.paciente
	INNER JOIN medico m ON m.medico_id = c.medico
	WHERE correo_electronico = _correo_electronico;
END$$

DELIMITER ;



/*GALVAN VICTOR*/
USE `master_clinician`;

DELIMITER $$
USE `master_clinician`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `web_sp_updatepaciente`(in _nombre_completo varchar(255), in _fecha_de_nacimiento date, in _genero varchar(12), _tipo_de_sangre varchar(5), _peso float, _estatura float, _direccion varchar(255), _correo_electronico varchar(255), _contraseña varchar(12), _telefono_de_casa varchar(12), _telefono_movil varchar(12), _enfermedades varchar(255), _alergias varchar(255), _cirugias_y_accidentes varchar(255))
BEGIN
UPDATE paciente SET nombre_completo_paciente = _nombre_completo, fecha_de_nacimiento = _fecha_de_nacimiento, genero = _genero, tipo_de_sangre = _tipo_de_sangre, peso = _peso, estatura = _estatura, direccion = _direccion, correo_electronico = _correo_electronico, contraseña = _contraseña, telefono_de_casa = _telefono_de_casa, telefono_movil = _telefono_movil, enfermedades = _enfermedades, alergias = _alergias, cirugias_y_accidentes = _cirugias_y_accidentes  
WHERE correo_electronico = _correo_electronico;
END$$

DELIMITER ;


/*GALVAN VICTOR*/
USE `master_clinician`;

DELIMITER $$
USE `master_clinician`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `web_sp_pacientelist`(IN _correo_electronico varchar(255))
BEGIN
	SELECT * FROM paciente
	WHERE correo_electronico = _correo_electronico;
END$$

DELIMITER ;