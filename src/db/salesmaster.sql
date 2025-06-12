-- AdminNeo 4.17.2 MySQL 8.0.35 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `idRol` int NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `roles` (`idRol`, `rol`) VALUES
(1,	'admin'),
(2,	'user'),
(3,	'desarrolador');

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `idRol` int DEFAULT NULL,
  `lang` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'es',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `idRol` (`idRol`),
  CONSTRAINT `Usuarios_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `departamento`, `password`, `idRol`, `lang`) VALUES
(5,	'Admin',	'',	'admin@gmail.com',	'',	'$2y$10$IvewZTy9N/6PZV1omT/F0evfmxAsuxYD7UMbtb8nCnIMvlZaEsF8.',	1,	'es'),
(10,	'Admin2',	'',	'admin2@gmail.com',	'',	'$2y$10$BLrHX8u76vAowFuqRcLeyO/URtoZsR.PVh3IzuBMgKgP1vH8adO2m',	1,	'es'),
(13,	'Usuario',	'User',	'user@gmail.com',	'IT',	'$2y$10$z4r7wXZb4p6u8KfrAJ3wbudg.VtvMw8fMnVcEIdUkyNorK5lAOLdO',	2,	'es'),
(25,	'AdminNuevo',	'Nuevo',	'admin507@gmail.com',	'',	'$2y$10$sLFDgbIKRJ7uNVJW1CpgXOwrMO0FjSJMNSraRU5faFmA3b.S6ihy2',	1,	'es'),
(29,	'Romina',	'Oscar',	'romina@gmail.com',	'IT',	'$2y$10$V.5pBJlUbwPc7m35rEx5qeYIsqQnyn543qNlhgNxCzQZqfUk9TLwq',	2,	'es'),
(32,	'Desarrollador01',	'Desarrollo',	'desarrollo@gmail.com',	'IT',	'$2y$10$3TsdCI0srH5yaEG1yaYhM.P2z2rPlhbbtgjghTryQlt4.arCYaCMS',	3,	'es');

-- 2025-06-12 05:02:49 UTC
