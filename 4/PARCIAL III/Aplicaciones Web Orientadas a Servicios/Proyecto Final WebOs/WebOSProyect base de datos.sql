CREATE DATABASE noticias;

USE noticias;

CREATE TABLE `usuario`(
  `usuario_id` INT(10) NOT NULL AUTO_INCREMENT,
  `nombre_completo` VARCHAR(255) NOT NULL,
  `correo_electronico` VARCHAR(255) NOT NULL,
  `contraseña` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`usuario_id`));


/*INSERT INTO `noticias`.`usuario` (`nombre_completo`, `correo_electronico`, `contraseña`)
VALUES ('Victor Manuel Galvan Covarrubias', 'vgalvan@gmail.com', 'mermeladadechabacano');*/



USE `noticias`;

DELIMITER $$
USE `noticias`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `web_sp_insertusuario`(in _nombre_completo varchar(255),in _correo_electronico varchar(255),in _contraseña varchar(12))
BEGIN
INSERT INTO usuario (nombre_completo, correo_electronico, contraseña) values (_nombre_completo,_correo_electronico,_contraseña);
END$$

DELIMITER ;


USE `noticias`;

DELIMITER $$
USE `noticias`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `web_sp_login`(in _correo_electronico VARCHAR(255), in _contraseña VARCHAR(12))
BEGIN
    SELECT * FROM usuario WHERE  correo_electronico =  _correo_electronico AND contraseña = _contraseña;
END$$

DELIMITER ;



USE `noticias`;

DELIMITER $$
USE `noticias`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `web_sp_loginfacebook`(in _correo_electronico VARCHAR(255))
BEGIN
    SELECT * FROM usuario WHERE  correo_electronico =  _correo_electronico;
END$$

DELIMITER ;




USE `noticias`;

DELIMITER $$
USE `noticias`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `web_sp_usuariolist`(IN _correo_electronico varchar(255))
BEGIN
	SELECT * FROM usuario
	WHERE correo_electronico = _correo_electronico;
END$$

DELIMITER ;

/*DROP DATABASE noticias;*/
