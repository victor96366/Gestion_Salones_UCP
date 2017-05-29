-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2017 a las 02:58:06
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestionsalones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equiposfisicos_has_reparacion`
--

CREATE TABLE `equiposfisicos_has_reparacion` (
  `id_has_reparacion` int(11) NOT NULL,
  `id_reparacion` int(11) NOT NULL,
  `id_equipos_fisicos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equiposfisicos_has_reparacion`
--

INSERT INTO `equiposfisicos_has_reparacion` (`id_has_reparacion`, `id_reparacion`, `id_equipos_fisicos`) VALUES
(1, 2, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos_fisicos`
--

CREATE TABLE `equipos_fisicos` (
  `id_equipos_fisicos` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `fecha_instalacion` date DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `horas_uso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos_fisicos`
--

INSERT INTO `equipos_fisicos` (`id_equipos_fisicos`, `nombre`, `fecha_instalacion`, `observaciones`, `horas_uso`) VALUES
(12, 'videobean1', '2017-02-01', 'ninguna', 0),
(13, 'videobeam11', '2017-05-28', 'sin observaciones', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id_facultad` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `cedula` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `cedula` int(11) NOT NULL,
  `id_salon` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `hora_inicio`, `hora_fin`, `cedula`, `id_salon`, `fecha`) VALUES
(1, '18:30:00', '20:00:00', 29136494, 1, '2017-05-07'),
(3, '20:30:00', '22:00:00', 1088329854, 2, '2017-05-07'),
(4, '16:00:00', '18:00:00', 29136494, 3, '2017-05-09'),
(5, '11:25:00', '23:00:00', 29136494, 5, '2017-05-07'),
(6, '15:20:00', '17:20:00', 1088335179, 10, '2017-05-09'),
(8, '17:15:00', '18:15:00', 29136494, 7, '2017-05-10'),
(9, '19:30:00', '20:00:00', 1088335179, 14, '2017-05-14'),
(10, '13:40:00', '22:00:00', 29136494, 14, '2017-05-14'),
(11, '21:59:00', '23:00:00', 1088329854, 14, '2017-05-14'),
(12, '22:15:00', '23:00:00', 29136494, 1, '2017-05-14'),
(13, '12:30:00', '13:00:00', 29136494, 8, '2017-05-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `nombre`) VALUES
(1, 'insertar'),
(2, 'consultar'),
(3, 'modificar'),
(4, 'eliminar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `ultimo_acceso` date NOT NULL,
  `id_rol` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`cedula`, `nombre`, `apellido`, `correo`, `contrasena`, `fecha_creacion`, `nombre_usuario`, `telefono`, `ultimo_acceso`, `id_rol`, `estado`) VALUES
(25024909, 'Milena', 'Orozco', 'milenaorozco999@hotmail.com', 'milena', '2017-04-17', 'milena999', 312356, '2017-04-17', 16, 0),
(29136494, 'ana', 'orozco', 'ana@ucp.edu.co', '276b6c4692e78d4799c12ada515bc3e4', '2017-04-14', 'anao', 3125859, '2017-04-14', 16, 1),
(57325843, 'Andres', 'Martinez', 'andres.martinez@ucp.edu.co', '21232f297a57a5a743894a0e4a801fc3', '2017-04-17', 'andres.martinez', 312456234, '2017-04-17', 1, 1),
(291365435, 'Estefania', 'Londoño', 'tefalondo9636@gmail.com', '61619c69ec893faea7ee7e3b46711ea8', '2017-05-22', 'tefalondo', 2147483647, '2017-05-22', 20, 0),
(1088329854, 'Julian', 'Ventero', 'julian.ventero@ucp.edu.co', '0207f5d24c638d0739413d4e217dab5e', '2017-04-20', 'jventero', 2147483647, '2017-04-20', 17, 1),
(1088335179, 'victor', 'orozco', 'victor.orozco@ucp.edu.co', '05d4be078abfb95ae07395971051c2f1', '2017-04-11', 'victore', 3125859, '2017-04-11', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id_prestamo` int(11) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `hora_entrega` time NOT NULL,
  `hora_recibe` time NOT NULL,
  `id_salon` tinyint(1) NOT NULL,
  `cedula` int(11) NOT NULL,
  `observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id_prestamo`, `fecha_prestamo`, `hora_entrega`, `hora_recibe`, `id_salon`, `cedula`, `observaciones`) VALUES
(2, '2017-05-07', '20:45:45', '22:06:13', 5, 29136494, ''),
(3, '2017-05-09', '14:50:28', '14:50:49', 10, 1088335179, ''),
(4, '2017-05-10', '16:46:00', '16:51:31', 7, 29136494, ''),
(5, '2017-05-14', '19:04:56', '20:13:29', 14, 1088335179, ''),
(8, '2017-05-14', '21:27:44', '21:28:13', 14, 29136494, ''),
(9, '2017-05-14', '21:43:31', '21:43:49', 14, 1088329854, ''),
(10, '2017-05-14', '22:29:59', '22:30:14', 1, 29136494, ''),
(11, '2017-05-28', '12:03:05', '12:35:23', 8, 29136494, 'falta ventilador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparacion`
--

CREATE TABLE `reparacion` (
  `id_reparacion` int(11) NOT NULL,
  `empresa_reparacion` varchar(30) NOT NULL,
  `fecha_reparacion` date NOT NULL,
  `reparacion_realizada` varchar(45) NOT NULL,
  `responsable_reparacion` varchar(25) NOT NULL,
  `vida_util_reparacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reparacion`
--

INSERT INTO `reparacion` (`id_reparacion`, `empresa_reparacion`, `fecha_reparacion`, `reparacion_realizada`, `responsable_reparacion`, `vida_util_reparacion`) VALUES
(1, 'equipotecnicoSA', '2017-03-01', 'cambio de lente', 'Andres Mora', 1),
(2, 'ucp', '2017-05-28', 'cambio de lente', 'victor', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`, `estado`) VALUES
(1, 'Administrador', 1),
(16, 'Secretaria2', 1),
(17, 'Administrador1', 1),
(18, 'Secretaria3', 0),
(19, 'Secretaria4', 0),
(20, 'defecto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_has_permisos`
--

CREATE TABLE `rol_has_permisos` (
  `id_has_rol` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol_has_permisos`
--

INSERT INTO `rol_has_permisos` (`id_has_rol`, `id_rol`, `id_permiso`) VALUES
(3, 1, 3),
(4, 1, 4),
(5, 16, 1),
(6, 16, 2),
(8, 17, 2),
(9, 17, 3),
(10, 17, 4),
(11, 18, 1),
(12, 18, 2),
(13, 19, 2),
(14, 19, 3),
(15, 20, 2),
(16, 17, 1),
(17, 1, 2),
(18, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `id_salon` int(11) NOT NULL,
  `disponibilidad` tinyint(4) NOT NULL,
  `aula` int(3) NOT NULL,
  `ubicacion` varchar(10) NOT NULL,
  `equipo_fisico` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`id_salon`, `disponibilidad`, `aula`, `ubicacion`, `equipo_fisico`) VALUES
(1, 1, 202, 'kabai', 0),
(2, 0, 203, 'Dabar', 1),
(3, 0, 304, 'kabai', 1),
(4, 0, 202, 'Dabar', 1),
(5, 0, 201, 'Dabar', 1),
(7, 1, 204, 'Dabar', 1),
(8, 0, 205, 'Dabar', 1),
(9, 0, 206, 'Dabar', 1),
(10, 0, 201, 'kabai', 1),
(14, 1, 204, 'kabai', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon_has_equiposfisicos`
--

CREATE TABLE `salon_has_equiposfisicos` (
  `id_has_equiposfisicos` int(11) NOT NULL,
  `id_equipo_fisico` int(11) NOT NULL,
  `id_salon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salon_has_equiposfisicos`
--

INSERT INTO `salon_has_equiposfisicos` (`id_has_equiposfisicos`, `id_equipo_fisico`, `id_salon`) VALUES
(1, 12, 1),
(2, 13, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equiposfisicos_has_reparacion`
--
ALTER TABLE `equiposfisicos_has_reparacion`
  ADD PRIMARY KEY (`id_has_reparacion`),
  ADD KEY `id_reparacion` (`id_reparacion`),
  ADD KEY `id_equipos_fisicos` (`id_equipos_fisicos`),
  ADD KEY `id_reparacion_2` (`id_reparacion`,`id_equipos_fisicos`);

--
-- Indices de la tabla `equipos_fisicos`
--
ALTER TABLE `equipos_fisicos`
  ADD PRIMARY KEY (`id_equipos_fisicos`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id_facultad`,`cedula`,`id_rol`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`,`cedula`,`id_salon`),
  ADD KEY `cedula` (`cedula`),
  ADD KEY `id_salon` (`id_salon`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`cedula`,`id_rol`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `id_salon` (`id_salon`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD PRIMARY KEY (`id_reparacion`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `rol_has_permisos`
--
ALTER TABLE `rol_has_permisos`
  ADD PRIMARY KEY (`id_has_rol`,`id_rol`,`id_permiso`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_permiso` (`id_permiso`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id_salon`);

--
-- Indices de la tabla `salon_has_equiposfisicos`
--
ALTER TABLE `salon_has_equiposfisicos`
  ADD PRIMARY KEY (`id_has_equiposfisicos`),
  ADD KEY `id_salon` (`id_salon`),
  ADD KEY `id_equipo_fisico` (`id_equipo_fisico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equiposfisicos_has_reparacion`
--
ALTER TABLE `equiposfisicos_has_reparacion`
  MODIFY `id_has_reparacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `equipos_fisicos`
--
ALTER TABLE `equipos_fisicos`
  MODIFY `id_equipos_fisicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id_facultad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  MODIFY `id_reparacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `rol_has_permisos`
--
ALTER TABLE `rol_has_permisos`
  MODIFY `id_has_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `id_salon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `salon_has_equiposfisicos`
--
ALTER TABLE `salon_has_equiposfisicos`
  MODIFY `id_has_equiposfisicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horario_ibfk_2` FOREIGN KEY (`id_salon`) REFERENCES `salon` (`id_salon`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
