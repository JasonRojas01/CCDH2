-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2024 a las 07:06:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoambiente`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_asesorias` (IN `sp_id` INT(11))   DELETE FROM asesorias WHERE id_asesoria = sp_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_voluntariado` (IN `sp_id` INT(11))   DELETE FROM voluntariado WHERE id_voluntariado = sp_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_asesorias` ()   SELECT * FROM asesorias$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_voluntariados` ()   SELECT * FROM voluntariado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_into_asesorias` (IN `sp_nombre` VARCHAR(40), IN `sp_email` VARCHAR(60), IN `sp_telefono` VARCHAR(20), IN `sp_tipo_caso` VARCHAR(20), IN `sp_descripcion_caso` TEXT)   BEGIN
 
INSERT INTO asesorias(nombre ,email ,telefono ,tipo_caso, descripcion_caso) VALUES 
    (sp_nombre, sp_email, sp_telefono, sp_tipo_caso, sp_descripcion_caso);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_into_voluntariados` (IN `sp_nombre` VARCHAR(40), IN `sp_email` VARCHAR(60), IN `sp_telefono` VARCHAR(50), IN `sp_disponibilidad` VARCHAR(20), IN `sp_area_interes` VARCHAR(25), IN `sp_descripcion` TEXT)   BEGIN
 
INSERT INTO voluntariado(nombre ,email ,telefono ,disponibilidad, area_interes, descripcion) VALUES 
    (sp_nombre, sp_email, sp_telefono, sp_disponibilidad, sp_area_interes, sp_descripcion);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_asesoria` (IN `sp_nombre` VARCHAR(40), IN `sp_email` VARCHAR(60), IN `sp_telefono` VARCHAR(20), IN `sp_tipo_caso` VARCHAR(20), IN `sp_descripcion_caso` TEXT, IN `sp_id` INT(11))   BEGIN
UPDATE asesorias 
SET nombre= sp_nombre, email=sp_email, telefono=sp_telefono, tipo_caso=sp_tipo_caso, descripcion_caso=sp_descripcion_caso
where id_asesoria=sp_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_voluntariado` (IN `sp_nombre` VARCHAR(40), IN `sp_email` VARCHAR(60), IN `sp_telefono` VARCHAR(50), IN `sp_disponibilidad` VARCHAR(20), IN `sp_area_interes` VARCHAR(25), IN `sp_descripcion` TEXT, IN `sp_id` INT(11))   BEGIN
UPDATE voluntariado 
SET nombre= sp_nombre, email=sp_email, telefono=sp_telefono, disponibilidad=sp_disponibilidad, area_interes=sp_area_interes, descripcion = sp_descripcion
where id_voluntariado=sp_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesorias`
--

CREATE TABLE `asesorias` (
  `id_asesoria` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `tipo_caso` varchar(20) NOT NULL,
  `descripcion_caso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asesorias`
--

INSERT INTO `asesorias` (`id_asesoria`, `nombre`, `email`, `telefono`, `tipo_caso`, `descripcion_caso`) VALUES
(6, 'kaled', 'kaledgrojas@gmail.com', '60081384', 'fgfdgdfg', 'Su mama me cae mal'),
(7, 'pedro', 'pedro@gmail.com', '87653467', 'dsfds', 'ghgfgh'),
(8, 'Jason Rojas', 'josugamer0108@gmail.com', '85778088', 'fgdfg', 'dfgfdg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `rol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `nombre`, `correo`, `password`, `telefono`, `rol`) VALUES
(1, 'favo', 'Favo Perez', 'jeyrp0139@gmail.com', '$2y$10$M9je7zIzn1FeE2CYwZ1AuO8JwU/I6Xj25BqvNHlUaWe1cPjvEjnM2', '85778088', 1),
(2, 'pedro', 'Pedro Ramirez', 'pedro@gmail.com', '$2y$10$lKNQuPBjZSkaW1qr3Nahhu5F2TWCA0yMY9IN9XDZxlVP9acrP6qdS', '87962456', 1),
(21, 'Jason', 'Jason Rojas', 'josugamer0108@gmail.com', '$2y$10$XeR1lvjthDmwtQ/b7eHN3u.oToAKfbpMbYozdoVZMQrlZhvJ.9LVa', '64546543', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntariado`
--

CREATE TABLE `voluntariado` (
  `id_voluntariado` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `disponibilidad` varchar(20) NOT NULL,
  `area_interes` varchar(25) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `voluntariado`
--

INSERT INTO `voluntariado` (`id_voluntariado`, `nombre`, `email`, `telefono`, `disponibilidad`, `area_interes`, `descripcion`) VALUES
(3, 'kaled', 'tonachete123@gmail.com', '60081384', 'flexible', 'educacion', 'gfdgdfgfdg'),
(4, 'ghfgh', 'jeyrp0139@gmail.com', '85778088', 'entre_semana', 'salud', 'fhfghfgh');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesorias`
--
ALTER TABLE `asesorias`
  ADD PRIMARY KEY (`id_asesoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `voluntariado`
--
ALTER TABLE `voluntariado`
  ADD PRIMARY KEY (`id_voluntariado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesorias`
--
ALTER TABLE `asesorias`
  MODIFY `id_asesoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `voluntariado`
--
ALTER TABLE `voluntariado`
  MODIFY `id_voluntariado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
