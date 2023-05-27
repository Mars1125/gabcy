-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2023 a las 21:08:32
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gabcy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` varchar(25) NOT NULL,
  `nombre_categoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
('1', 'Software'),
('2', 'Hardware'),
('3', 'Diseño'),
('4', 'Hosting'),
('5', 'Marketing'),
('6', 'Cursos'),
('7', 'Capacitación de Empresas'),
('8', 'Declaraciones Personales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` varchar(25) NOT NULL,
  `id_proyecto` varchar(25) DEFAULT NULL,
  `id_usuario` varchar(25) DEFAULT NULL,
  `fecha_cita` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `motivo_cita` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` varchar(25) NOT NULL,
  `id_usuario` varchar(25) DEFAULT NULL,
  `fecha_contacto` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `motivo_contacto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conversacion`
--

CREATE TABLE `conversacion` (
  `id_conversacion` varchar(25) NOT NULL,
  `id_proyecto` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `conversacion`
--

INSERT INTO `conversacion` (`id_conversacion`, `id_proyecto`) VALUES
('6471267430ceb', '6471267430ce9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa`
--

CREATE TABLE `etapa` (
  `id_etapa` varchar(25) NOT NULL,
  `nombre_etapa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etapa`
--

INSERT INTO `etapa` (`id_etapa`, `nombre_etapa`) VALUES
('1', 'Análisis de Requisitos'),
('2', 'Maquetado'),
('3', 'Desarrollo'),
('4', 'Implementacion'),
('5', 'Proyecto Entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa_proyecto`
--

CREATE TABLE `etapa_proyecto` (
  `id_etapa` varchar(25) DEFAULT NULL,
  `id_proyecto` varchar(25) DEFAULT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_fin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etapa_proyecto`
--

INSERT INTO `etapa_proyecto` (`id_etapa`, `id_proyecto`, `fecha_inicio`, `fecha_fin`, `estado`) VALUES
('1', '6471267430ce9', '2023-05-26 21:39:49', '0000-00-00 00:00:00', 'En proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion`
--

CREATE TABLE `funcion` (
  `id_funcion` varchar(25) NOT NULL,
  `nombre_funcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `funcion`
--

INSERT INTO `funcion` (`id_funcion`, `nombre_funcion`) VALUES
('1', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion_usuario`
--

CREATE TABLE `funcion_usuario` (
  `id_usuario` varchar(25) DEFAULT NULL,
  `id_funcion` varchar(25) DEFAULT NULL,
  `estado_funcion` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` varchar(25) NOT NULL,
  `fecha_mensaje` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `texto_mensaje` text DEFAULT NULL,
  `id_conversacion` varchar(25) DEFAULT NULL,
  `id_usuario_envia` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mensaje`, `fecha_mensaje`, `texto_mensaje`, `id_conversacion`, `id_usuario_envia`) VALUES
('', '2023-05-26 21:36:52', 'Bienvenida/o a GABCY, tu proyecto ha sido creado con éxito', '6471267430ceb', 'mvagigadefense'),
('6472538e9fd6a', '2023-05-27 19:01:34', 'Buenas tardes, actualizo su proyecto', '6471267430ceb', 'mcagabcy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` varchar(25) NOT NULL,
  `nombre_proyecto` varchar(100) DEFAULT NULL,
  `fecha_inicio_proyecto` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_fin_proyecto` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `url_proyecto` varchar(300) DEFAULT NULL,
  `id_categoria` varchar(25) DEFAULT NULL,
  `id_usuario` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `nombre_proyecto`, `fecha_inicio_proyecto`, `fecha_fin_proyecto`, `url_proyecto`, `id_categoria`, `id_usuario`) VALUES
('6471267430ce9', 'Papeleria', '2023-05-26 21:39:49', '0000-00-00 00:00:00', 'https//ejemplo.com', '5', 'mvagigadefense');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` varchar(25) NOT NULL,
  `nombres_usuario` varchar(100) DEFAULT NULL,
  `apellidos_usuario` varchar(100) DEFAULT NULL,
  `correo_usuario` varchar(200) DEFAULT NULL,
  `contrasena_usuario` varchar(100) DEFAULT NULL,
  `telefono_usuario` varchar(15) DEFAULT NULL,
  `empresa_usuario` varchar(100) DEFAULT NULL,
  `cargo_usuario` varchar(100) DEFAULT NULL,
  `rol_usuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombres_usuario`, `apellidos_usuario`, `correo_usuario`, `contrasena_usuario`, `telefono_usuario`, `empresa_usuario`, `cargo_usuario`, `rol_usuario`) VALUES
('mcagabcy', 'marina', 'campos', 'marina@gmail.com', '1234', '5583838383', 'GABCY', 'Administradora', '1'),
('mvagigadefense', 'Marco', 'Vargas', 'mvargas750@gmail.com', '1234', '5588368366', 'Gigadefense', 'Becario', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_proyecto` (`id_proyecto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `conversacion`
--
ALTER TABLE `conversacion`
  ADD PRIMARY KEY (`id_conversacion`),
  ADD KEY `id_proyecto` (`id_proyecto`);

--
-- Indices de la tabla `etapa`
--
ALTER TABLE `etapa`
  ADD PRIMARY KEY (`id_etapa`);

--
-- Indices de la tabla `etapa_proyecto`
--
ALTER TABLE `etapa_proyecto`
  ADD KEY `id_etapa` (`id_etapa`),
  ADD KEY `id_proyecto` (`id_proyecto`);

--
-- Indices de la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD PRIMARY KEY (`id_funcion`);

--
-- Indices de la tabla `funcion_usuario`
--
ALTER TABLE `funcion_usuario`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_funcion` (`id_funcion`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id_mensaje`),
  ADD KEY `id_usuario_envia` (`id_usuario_envia`),
  ADD KEY `id_conversacion` (`id_conversacion`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`),
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `conversacion`
--
ALTER TABLE `conversacion`
  ADD CONSTRAINT `conversacion_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`);

--
-- Filtros para la tabla `etapa_proyecto`
--
ALTER TABLE `etapa_proyecto`
  ADD CONSTRAINT `etapa_proyecto_ibfk_1` FOREIGN KEY (`id_etapa`) REFERENCES `etapa` (`id_etapa`),
  ADD CONSTRAINT `etapa_proyecto_ibfk_2` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`);

--
-- Filtros para la tabla `funcion_usuario`
--
ALTER TABLE `funcion_usuario`
  ADD CONSTRAINT `funcion_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `funcion_usuario_ibfk_2` FOREIGN KEY (`id_funcion`) REFERENCES `funcion` (`id_funcion`);

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `mensaje_ibfk_1` FOREIGN KEY (`id_usuario_envia`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `mensaje_ibfk_2` FOREIGN KEY (`id_conversacion`) REFERENCES `conversacion` (`id_conversacion`);

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `proyecto_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
