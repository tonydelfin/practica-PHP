-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2021 a las 23:08:21
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paginaweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `Id_equipo` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Categoria` text NOT NULL,
  `Contacto` varchar(100) NOT NULL,
  `Registro` varchar(20) NOT NULL,
  `Estatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`Id_equipo`, `Nombre`, `Categoria`, `Contacto`, `Registro`, `Estatus`) VALUES
(1, 'Chivas', 'Primera Varonil', 'chivas@gamil.com', 'Registrado', ''),
(2, 'Jorge', 'Primera Varonil', 'tonydelfin@12.com', 'Registrado', 'Activo'),
(4, 'Pumas', 'Juvenil', 'pumasfc@gmail.com', 'Registrado', 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_evento`
--

CREATE TABLE `equipo_evento` (
  `Id_equipo` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `jj` int(4) NOT NULL,
  `jg` int(4) NOT NULL,
  `jp` int(4) NOT NULL,
  `Golef_f` int(4) NOT NULL,
  `Goles_c` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_jugador`
--

CREATE TABLE `equipo_jugador` (
  `Id_equipo` int(11) NOT NULL,
  `Id_jugador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `Id_evaluacion` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Proposito` varchar(100) NOT NULL,
  `Tipo` tinyint(1) NOT NULL,
  `Prguntas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_jugador`
--

CREATE TABLE `evaluacion_jugador` (
  `Id_evaluacion` int(11) NOT NULL,
  `Id_jugador` int(11) NOT NULL,
  `nota` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `Id_evento` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `Tipo` tinyint(1) NOT NULL,
  `Ambulancia` tinyint(1) NOT NULL,
  `Hidratacion` tinyint(1) NOT NULL,
  `Otro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `Id_jugador` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `Dorsal` int(3) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Sexo` tinyint(1) NOT NULL,
  `Id_equipo` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador_evento`
--

CREATE TABLE `jugador_evento` (
  `Id_evento` int(11) NOT NULL,
  `Id_jugador` int(11) NOT NULL,
  `Asistencias` int(4) NOT NULL,
  `Goles` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrou`
--

CREATE TABLE `registrou` (
  `Id_registro` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Clave` varchar(40) NOT NULL,
  `Id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrou`
--

INSERT INTO `registrou` (`Id_registro`, `Nombre`, `Apellidos`, `Correo`, `Clave`, `Id_usuario`) VALUES
(1, 'Jorge', 'Deflin Santos', 'tonydelfin@gmial.com', 'asdas', 1),
(2, 'Emily', 'Lares Ramirez', 'emily123@gmial.com', 'prueba', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_usuario` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `clave` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`Id_equipo`);

--
-- Indices de la tabla `equipo_evento`
--
ALTER TABLE `equipo_evento`
  ADD KEY `Id_equipo` (`Id_equipo`),
  ADD KEY `id_evento` (`id_evento`);

--
-- Indices de la tabla `equipo_jugador`
--
ALTER TABLE `equipo_jugador`
  ADD KEY `Id_equipo` (`Id_equipo`),
  ADD KEY `Id_jugador` (`Id_jugador`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`Id_evaluacion`);

--
-- Indices de la tabla `evaluacion_jugador`
--
ALTER TABLE `evaluacion_jugador`
  ADD KEY `Id_evaluacion` (`Id_evaluacion`),
  ADD KEY `Id_jugador` (`Id_jugador`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`Id_evento`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`Id_jugador`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `jugador_evento`
--
ALTER TABLE `jugador_evento`
  ADD KEY `Id_evento` (`Id_evento`),
  ADD KEY `Id_jugador` (`Id_jugador`);

--
-- Indices de la tabla `registrou`
--
ALTER TABLE `registrou`
  ADD PRIMARY KEY (`Id_registro`),
  ADD KEY `Id_u` (`Id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo_evento`
--
ALTER TABLE `equipo_evento`
  ADD CONSTRAINT `equipo_evento_ibfk_1` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`Id_evento`),
  ADD CONSTRAINT `equipo_evento_ibfk_2` FOREIGN KEY (`Id_equipo`) REFERENCES `equipo` (`Id_equipo`);

--
-- Filtros para la tabla `equipo_jugador`
--
ALTER TABLE `equipo_jugador`
  ADD CONSTRAINT `equipo_jugador_ibfk_1` FOREIGN KEY (`Id_jugador`) REFERENCES `jugador` (`Id_jugador`),
  ADD CONSTRAINT `equipo_jugador_ibfk_2` FOREIGN KEY (`Id_equipo`) REFERENCES `equipo` (`Id_equipo`);

--
-- Filtros para la tabla `evaluacion_jugador`
--
ALTER TABLE `evaluacion_jugador`
  ADD CONSTRAINT `evaluacion_jugador_ibfk_1` FOREIGN KEY (`Id_jugador`) REFERENCES `jugador` (`Id_jugador`),
  ADD CONSTRAINT `evaluacion_jugador_ibfk_2` FOREIGN KEY (`Id_evaluacion`) REFERENCES `evaluacion` (`Id_evaluacion`);

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `jugador_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`);

--
-- Filtros para la tabla `jugador_evento`
--
ALTER TABLE `jugador_evento`
  ADD CONSTRAINT `jugador_evento_ibfk_1` FOREIGN KEY (`Id_jugador`) REFERENCES `jugador` (`Id_jugador`),
  ADD CONSTRAINT `jugador_evento_ibfk_2` FOREIGN KEY (`Id_evento`) REFERENCES `evento` (`Id_evento`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `registrou` (`Id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
