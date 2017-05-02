-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2017 a las 03:34:32
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos_fisicos`
--

CREATE TABLE `equipos_fisicos` (
  `id_equipos_fisicos` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `fecha_instalacion` date DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos_fisicos`
--

INSERT INTO `equipos_fisicos` (`id_equipos_fisicos`, `nombre`, `fecha_instalacion`, `observaciones`) VALUES
(12, 'videobean1', '2017-02-01', 'ninguna');

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
  `contrasena` varchar(20) NOT NULL,
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
(29136494, 'ana', 'orozco', 'ana@ucp.edu.co', 'estefania', '2017-04-14', 'anao', 3125859, '2017-04-14', 16, 1),
(57325843, 'Andres', 'Martinez', 'andres.martinez@ucp.edu.co', 'andres.martinez', '2017-04-17', 'andres.martinez', 312456234, '2017-04-17', 20, 1),
(1088329854, 'Julian', 'Ventero', 'julian.ventero@ucp.edu.co', 'jventero', '2017-04-20', 'jventero', 2147483647, '2017-04-20', 1, 1),
(1088335179, 'victor', 'orozco', 'victor.orozco@ucp.edu.co', 'estefania', '2017-04-11', 'victore', 3125859, '2017-04-11', 1, 1);

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
  `cedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'equipotecnicoSA', '2017-03-01', 'cambio de lente', 'Andres Mora', 1);

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
(1, 1, 1),
(2, 1, 2),
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
(16, 17, 1);

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
(1, 0, 202, 'kabai', 0),
(2, 0, 203, 'Dabar', 1),
(3, 0, 304, 'kabai', 1),
(4, 0, 202, 'Dabar', 1),
(5, 0, 201, 'Dabar', 1),
(7, 0, 204, 'Dabar', 1),
(8, 0, 205, 'Dabar', 1),
(9, 0, 206, 'Dabar', 1),
(10, 0, 201, 'kabai', 1),
(14, 0, 204, 'kabai', 1);

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
(1, 12, 1);

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
  MODIFY `id_has_reparacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `equipos_fisicos`
--
ALTER TABLE `equipos_fisicos`
  MODIFY `id_equipos_fisicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id_facultad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  MODIFY `id_reparacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `rol_has_permisos`
--
ALTER TABLE `rol_has_permisos`
  MODIFY `id_has_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `id_salon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `salon_has_equiposfisicos`
--
ALTER TABLE `salon_has_equiposfisicos`
  MODIFY `id_has_equiposfisicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
