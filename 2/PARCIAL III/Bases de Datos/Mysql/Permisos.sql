/*CREAR USUARIO*/
create user 'juan'@'localhost' identified by 'hola';
/*VER LOS PERMISOS DE USUARIO*/
show grants for 'juan'@'localhost';

/*asignar permisos*/
GRANT SELECT ON master_clinician.medicos TO 'juan'@'localhost';
SHOW GRANTS FOR 'juan'@'localhost';

GRANT SELECT ON *.* TO 'juan'@'localhost';

/*revocar permisos*/

REVOKE SELECT ON *.*FROM 'juan'@'localhost';

REPAIR TABLE master_clinician.phpmyadmin;

DROP USER 'juan'@'localhost';