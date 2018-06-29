-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2017 a las 15:58:25
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(11) NOT NULL,
  `categoria_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `categoria_nombre`) VALUES
(1, 'moto'),
(2, 'bicicleta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `ingreso_id` int(11) NOT NULL,
  `ingreso_usuario` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ingreso_vehiculo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ingreso_hora` datetime NOT NULL,
  `ingreso_salida` datetime NOT NULL,
  `ingreso_parqueadero` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `ingreso_estado` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ingreso`
--

INSERT INTO `ingreso` (`ingreso_id`, `ingreso_usuario`, `ingreso_vehiculo`, `ingreso_hora`, `ingreso_salida`, `ingreso_parqueadero`, `ingreso_estado`) VALUES
(11, '2147483647', 'URG657', '2017-12-07 23:37:16', '2017-12-11 10:18:37', '7', 1),
(12, '123454321', 'JDFH4', '2017-12-07 23:37:23', '0000-00-00 00:00:00', '8', 0),
(13, '123454321', 'JDFH4', '2017-12-07 23:37:54', '2017-12-11 10:20:23', '6', 1),
(14, '123454321', 'JDFH4', '2017-12-07 23:38:01', '0000-00-00 00:00:00', '39', 0),
(15, '123454321', 'JDFH4', '2017-12-07 23:38:11', '0000-00-00 00:00:00', '23', 0),
(16, '123454321', 'JDFH4', '2017-12-07 23:38:26', '0000-00-00 00:00:00', '30', 0),
(17, '123454321', 'JDFH4', '2017-12-08 11:12:50', '2017-12-11 10:20:20', '5', 1),
(18, '356436567', 'JDFH4', '2017-12-08 11:12:58', '0000-00-00 00:00:00', '17', 0),
(19, '356436567', 'JDFH4', '2017-12-08 11:13:10', '0000-00-00 00:00:00', '36', 0),
(20, '2147483647', 'JDFH4', '2017-12-08 11:38:24', '0000-00-00 00:00:00', '22', 0),
(21, '356436567', 'JDFH4', '2017-12-11 08:45:33', '2017-12-11 10:20:18', '4', 1),
(22, '2147483647', 'URG657', '2017-12-11 08:46:19', '0000-00-00 00:00:00', '27', 0),
(23, '123454321', 'JDFH4', '2017-12-11 08:46:25', '2017-12-11 10:23:36', '2', 1),
(25, '356436567', 'URG657', '2017-12-11 10:13:53', '0000-00-00 00:00:00', '18', 0),
(26, '356436567', 'URG657', '2017-12-11 10:18:44', '0000-00-00 00:00:00', '7', 0),
(27, '356436567', 'URG657', '2017-12-11 10:23:24', '2017-12-12 08:04:37', '3', 1),
(28, '356436567', 'JDFH4', '2017-12-11 10:23:58', '2017-12-11 10:24:00', '21', 1),
(30, '123454321', 'JDFH4', '2017-12-11 10:40:58', '2017-12-12 08:04:36', '2', 1),
(31, '356436567', 'JDFH4', '2017-12-11 10:50:07', '2017-12-11 10:50:54', '5', 1),
(33, '123454321', 'JDFH4', '2017-12-11 10:50:48', '2017-12-11 10:50:56', '6', 1),
(34, '123454321', 'JDFH4', '2017-12-11 10:50:50', '2017-12-11 10:50:53', '4', 1),
(35, '123454321', 'JDFH4', '2017-12-11 10:50:57', '2017-12-12 08:04:39', '4', 1),
(36, '2147483647', 'JDFH4', '2017-12-11 11:08:51', '0000-00-00 00:00:00', '5', 0),
(37, '2147483647', 'JDFH4', '2017-12-11 11:09:14', '2017-12-11 11:16:45', '6', 1),
(38, '356436567', 'FGH5896', '2017-12-11 11:16:50', '0000-00-00 00:00:00', '10', 0),
(39, '2147483647', 'JDFH4', '2017-12-12 08:04:46', '2017-12-12 08:10:43', '3', 1),
(40, '2147483647', 'URG657', '2017-12-12 08:08:48', '2017-12-12 08:08:53', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `login_usuario` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `login_password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `login_cargo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`login_usuario`, `login_password`, `login_cargo`) VALUES
('0245465464', '$2y$10$NxjUuxRVaKcroNPOr7MMSe7oPs1XjNLR0bVcSNlvfC3P1gkpD0KD6', 'operario'),
('1022383181', 'A1022383181', 'admin'),
('1030644422', '$2y$10$dryWpFizn6wPyKYKS106Uu0c1D.Mg9Hy/.MoVZUgxbtt/je1BjwAq', 'operario'),
('23154564', '$2y$10$e6WUo/q7XfAKDmox.zMkHurN/czYEv1HX4vMdXD7Ec1BJx52B18DO', 'operario'),
('24684854', '$2y$10$EBIexmvfBn6zdrV8FBI1J.cNRugmraiZ/dwDp16wBTnxCUYprkzAq', 'operario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_tp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_documento` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_celular` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_estado` int(1) NOT NULL DEFAULT '1',
  `usuario_genero` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_ingreso` datetime NOT NULL,
  `usuario_cargo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_password`, `usuario_nombre`, `usuario_apellido`, `usuario_tp`, `usuario_documento`, `usuario_direccion`, `usuario_email`, `usuario_telefono`, `usuario_celular`, `usuario_estado`, `usuario_genero`, `usuario_ingreso`, `usuario_cargo`) VALUES
('0245465464', '$2y$10$NxjUuxRVaKcroNPOr7MMSe7oPs1XjNLR0bVcSNlvfC3P1gkpD0KD6', 'PAULA', 'SALAZAR', 'cc', '0245465464', 'DGF', 'DG@GMAIL.COM', '2589632', '3215896321', 1, 'F', '2017-12-11 11:36:40', 'operario'),
('1022383181', 'A1022383181', 'OSCAR ANDRES ', 'LONDOÑO', 'cc', '1022383181', 'Carrera 30 #5-4', 'oscarandres@gmail.com', '2345687', '3203456782', 1, 'm', '2017-12-07 09:39:00', 'admin'),
('1030644422', '$2y$10$dryWpFizn6wPyKYKS106Uu0c1D.Mg9Hy/.MoVZUgxbtt/je1BjwAq', 'JOHAN', 'RICAUTE', 'cc', '1030644422', 'CR 45', 'JOHAN@HOTMAIL.COM', '3456345', '3849501827', 1, 'M', '2017-12-07 09:45:33', 'operario'),
('123454321', '', 'FERNANDO', 'BELTRAN', 'cc', '123454321', 'GVG', 'A@HOTMAIL.COM', '7654567', '7654567654', 1, 'M', '2017-12-07 10:04:39', 'usuario'),
('2147483647', '', 'ANDRESA', 'TORO', 'cc', '3748954837', 'CR 45', 'H@HOTMAIL.COM', '6374857', '4657839410', 1, 'M', '2017-12-07 09:53:51', 'usuario'),
('23154564', '$2y$10$e6WUo/q7XfAKDmox.zMkHurN/czYEv1HX4vMdXD7Ec1BJx52B18DO', 'CAMILO', 'ORTIZ', 'cc', '23154564', 'DFJDSGHJDKG', 'DJGBD@GMAIL.COM', '2589632', '3215896321', 1, 'F', '2017-12-11 11:38:22', 'operario'),
('24684854', '$2y$10$EBIexmvfBn6zdrV8FBI1J.cNRugmraiZ/dwDp16wBTnxCUYprkzAq', 'MIGUEL ', 'TORRES', 'cc', '24684854', 'calle 56', 'luismiguel04@gmail.com', '2589632', '3215896321', 1, 'M', '2017-12-11 11:37:39', 'operario'),
('356436567', '', 'SOFIA', 'PACHECO', 'cc', '356436567', 'JFDFG', 'EFGJ@GMAIL.COM', '3456789', '3201347838', 1, 'F', '2017-12-07 10:05:44', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `vehiculo_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vehiculo_usuario` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `vehiculo_color` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `vehiculo_tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`vehiculo_id`, `vehiculo_usuario`, `vehiculo_color`, `vehiculo_tipo`) VALUES
('FGH5896', '356436567', 'VERDE', 1),
('JDFH4', '2147483647', 'NEGRO', 1),
('URG657', '2147483647', 'verde', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`ingreso_id`),
  ADD KEY `ingreso_usuario` (`ingreso_usuario`),
  ADD KEY `ingreso_vehiculo` (`ingreso_vehiculo`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`vehiculo_id`),
  ADD KEY `vehiculo_tipo` (`vehiculo_tipo`),
  ADD KEY `vehiculo_usuario` (`vehiculo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `ingreso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD CONSTRAINT `ingreso_ibfk_2` FOREIGN KEY (`ingreso_vehiculo`) REFERENCES `vehiculo` (`vehiculo_id`),
  ADD CONSTRAINT `ingreso_ibfk_3` FOREIGN KEY (`ingreso_usuario`) REFERENCES `usuario` (`usuario_id`);

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`login_usuario`) REFERENCES `usuario` (`usuario_id`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`vehiculo_tipo`) REFERENCES `categoria` (`categoria_id`),
  ADD CONSTRAINT `vehiculo_ibfk_2` FOREIGN KEY (`vehiculo_usuario`) REFERENCES `usuario` (`usuario_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
